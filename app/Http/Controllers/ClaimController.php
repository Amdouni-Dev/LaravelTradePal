<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;

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

        $claims = $user->claims;

        return view('FrontEnd.Claims.list', ['claims' => $claims]);
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


    // Show the form for creating a new claim
    public function create()
    {
        return view('claims.create');
    }

    // Store a newly created claim in the database
    public function store(Request $request)
    {
        // Validation logic here

        $claim = new Claim([
            'user_id' => $request->input('user_id'),
            'subject' => $request->input('subject'),
            'description' => $request->input('description'),
//            'photo' => $request->input('photo'),
            'claim_date' => now(),
            'status' => 'PENDING',
        ]);

        $claim->save();

        return redirect()->route('claims.index')->with('success', 'Claim created successfully');
    }

    // Show the form for editing a claim
    public function edit($id)
    {
        $claim = Claim::findOrFail($id);
        return view('claims.edit', compact('claim'));
    }

    // Update the specified claim in the database
    public function update(Request $request, $id)
    {
        // Validation logic here

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

    // Remove the specified claim from the database
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

        $recipientEmail = 'meddebyesmina123@gmail.com'; // Your Mailtrap email address
        $emailSubject = 'Claim Status Changed';
        $emailContent = 'The status of your claim has been changed to IN PROGRESS.';

        \Log::info('sendEmail method called for claim ID: ' . $claimId);
        \Log::info('Sending email with subject: ' . $emailSubject);
        \Log::info('Email content: ' . $emailContent);

        Mail::send([], [], function ($message) use ($recipientEmail, $emailSubject, $emailContent) {
            $message->to($recipientEmail)
                ->subject($emailSubject)
                ->setBody($emailContent, 'text/plain');
        });


        $claim->status = 'IN PROGRESS';
        $claim->save();

        return redirect()->route('claimsForAdmin')->with('success', 'Email sent and status updated to IN PROGRESS');
    }
    //            Mail::to($claim->user->email)->send(new ClaimStatusChanged($claim, 'IN PROGRESS'));


}
