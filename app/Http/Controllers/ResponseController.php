<?php

namespace App\Http\Controllers;

use App\Models\Response;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
// Display a list of responses
    public function index()
    {
        $responses = Response::all();
        return view('responses.index', compact('responses'));
    }

    // Show the form for creating a new response
    public function create()
    {
        return view('responses.create');
    }

    // Store a newly created response in the database
    public function store(Request $request)
    {
        // Validation logic here

        $response = new Response([
            'claim_id' => $request->input('claim_id'),
            'user_id' => $request->input('user_id'),
            'content' => $request->input('content'),
            'response-date' => now(),
        ]);

        $response->save();

        return redirect()->route('responses.index')->with('success', 'Response created successfully');
    }

    // Show the form for editing a response
    public function edit($id)
    {
        $response = Response::findOrFail($id);
        return view('responses.edit', compact('response'));
    }

    // Update the specified response in the database
    public function update(Request $request, $id)
    {
        // Validation logic here

        $response = Response::findOrFail($id);
        $response->update([
            'claim_id' => $request->input('claim_id'),
            'user_id' => $request->input('user_id'),
            'content' => $request->input('content'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('responses.index')->with('success', 'Response updated successfully');
    }

    // Remove the specified response from the database
    public function destroy($id)
    {
        $response = Response::findOrFail($id);
        $response->delete();

        return redirect()->route('responses.index')->with('success', 'Response deleted successfully');
    }

}
