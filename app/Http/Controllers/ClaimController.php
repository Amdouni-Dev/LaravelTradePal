<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use App\Models\User;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Email;
use function Termwind\render;

class ClaimController extends Controller
{

    public function claimsForAdmin()
    {
        $viewPath = 'BackOffice.claims.claims';

        $listClaims = Claim::latest()->paginate(5);
        $claimsPerMonth = DB::table('claims')
            ->selectRaw("DATE_FORMAT(claim_date, '%M') as month")
            ->selectRaw('COUNT(*) as count')
            ->groupBy('month')
            ->get();

        return view('BackOffice.template', compact('viewPath', 'claimsPerMonth'))
            ->with(['listClaims' => $listClaims, 'i' => (request()->input('page', 1) - 1) * 5]);
    }

    public function claimsForUser()
    {
        $user = auth()->user();

        $userClaims = $user->claims()->paginate(5);

        return view('FrontEnd.Claims.list', ['userClaims' => $userClaims]);
    }


    public function search(Request $request)
    {
        $viewPath = 'BackOffice.claims.claims';
        $search = $request->input('search');
        $date = $request->input('date');
        $status = $request->input('status');

        $query = Claim::query();

        if ($search) {
            $query->where(function ($subquery) use ($search) {
                $subquery->where('subject', 'like', '%' . $search . '%');
//                    ->orWhere('description', 'like', '%' . $search . '%');
            });
        }

        if ($date) {
            $query->whereDate('claim_date', $date);
        }

        if ($status && in_array($status, ['PENDING', 'IN PROGRESS', 'RESOLVED', 'CLOSED'])) {
            $query->where('status', $status);
        }

        $listClaims = $query->paginate(5);

        return view('BackOffice.template', compact('viewPath'))
            ->with(['listClaims' => $listClaims]);
    }


    public function clearFilters()
    {
        $viewPath = 'BackOffice.claims.claims';
        $listClaims = Claim::latest()->paginate(5);
        return view('BackOffice.template', compact('viewPath', 'listClaims'));
    }


    public function create()
    {
        return view('FrontEnd.Claims.addClaim');
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $claim = new Claim([
            'user_id' => $user->getAuthIdentifier(),
            'subject' => $request->input('subject'),
            'description' => $request->input('description'),
            'claim_date' => now(),
            'status' => 'PENDING',
        ]);

        if ($request->hasFile('claimImage')) {
            $image = $request->file('claimImage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('claims'), $imageName);
            $claim->claimImage = $imageName;

    }

        $claim->save();

        return redirect()->route('claimsForUser')->with('success', 'Claim created successfully');
    }

    public function edit($id)
    {
        $claim = Claim::findOrFail($id);
        return view('claims.edit', compact('claim'));
    }

    public function update(Request $request, $id)
    {

        $claim = Claim::findOrFail($id);
        $claim->update([
            'user_id' => $request->input('user_id'),
            'subject' => $request->input('subject'),
            'description' => $request->input('description'),
//            'photo' => $request->input('photo'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('claims.index')->with('success', 'Claim updated successfully');
    }

    public function destroy($id)
    {
        $claim = Claim::findOrFail($id);
        $claim->delete();

        return redirect()->route('claimsForAdmin')->with('success', 'Claim deleted successfully');
    }

    public function sendEmail($claimId)
    {
        $claim = Claim::find($claimId);

        if (!$claim) {
            return redirect()->route('claimsForAdmin')->with('error', 'Claim not found');
        }

        $user = $claim->user_id;
        $owner = User::find($user);
        $owner_email= $owner->email;

        $recipientEmail = $owner_email;
        $emailSubject = 'Your Claim Is Being Processed';
        $emailContent = "TradePal community is currently working on your claim. We will keep you updated with any progress or changes.";

        Mail::raw($emailContent, function ($message) use ($emailSubject, $recipientEmail) {
            $message->to($recipientEmail)
                ->subject($emailSubject);
        });

        $claim->status = 'IN PROGRESS';
        $claim->save();

        return redirect()->route('claimsForAdmin')->with('success', 'Email sent and status updated to IN PROGRESS');
    }
    //            Mail::to($claim->user->email)->send(new ClaimStatusChanged($claim, 'IN PROGRESS'));



    public function generatePdf(Claim $claim)
    {
        $pdf = new Dompdf();

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $options->set('isRemoteEnabled', true);
        $pdf->setOptions($options);

        $html = view('BackOffice.claims.claimPdf', compact('claim'))->render();

        $pdf->loadHtml($html);

        $pdf->render();

        $pdf->stream("reclamation.pdf");
    }

    public function UserClaimDetail(){
        return view('FrontEnd.Claims.detailsReclamation');
    }
}
