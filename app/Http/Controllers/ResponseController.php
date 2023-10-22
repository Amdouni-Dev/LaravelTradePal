<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use App\Models\Response;
use App\Models\User;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function index()
    {
        $responses = Response::all();
        return view('responses.index', compact('responses'));
    }

    public function create($claim_id)
    {
        $viewPath = 'BackOffice.claims.response-form';
        $claim = Claim::find($claim_id);
        $user_id = $claim->user_id;
        $user = User::find($user_id);
        $responses = $claim->responses;
        return view('BackOffice.template', compact('viewPath', 'claim', 'user', 'responses'));
    }


    public function store(Request $request)
    {
        $user = auth()->user();
        $response = new Response([
            'claim_id' => $request->input('claim_id'),
            'user_id' => $user->getAuthIdentifier(),
            'content' => $request->input('content'),
            'response-date' => now(),
        ]);
//        $claim = Claim::find($request->input('claim_id'));
//
//            $claim->status = 'SOLVED';
//            $claim->save();
        $response->save();

        return redirect()->back()->with('success', 'Réponse supprimée avec succès');
    }

    public function edit($id)
    {
        $response = Response::findOrFail($id);
        return view('responses.edit', compact('response'));
    }

    public function update(Request $request, $id)
    {
        $response = Response::findOrFail($id);
        $response->update([
            'claim_id' => $request->input('claim_id'),
            'user_id' => $request->input('user_id'),
            'content' => $request->input('content'),
            'status' => $request->input('status'),
        ]);

        return redirect()->back()->with('success', 'Réponse supprimée avec succès');
    }

    public function destroy($id)
    {
        $response = Response::findOrFail($id);
        $response->delete();

        return redirect()->back()->with('success', 'Réponse supprimée avec succès');
    }

    public function showClaim($id)
    {
        $claim = Claim::with('responses')->find($id);

        return view('FrontEnd.Claims.detailsReclamation', compact('claim'));
    }


}
