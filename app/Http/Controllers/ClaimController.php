<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use Illuminate\Http\Request;

class ClaimController extends Controller
{
    public function index()
    {
        $claims = Claim::all();
        return view('claims.index', compact('claims'));
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

        return redirect()->route('claims.index')->with('success', 'Claim deleted successfully');
    }
}
