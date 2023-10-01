<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viewPath = 'BackOffice.organization.table';
        $organizations = Organization::latest()->paginate(5);
        return view('BackOffice.template', compact('viewPath', 'organizations'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $viewPath = 'BackOffice.organization.forms';
        return view('BackOffice.template', compact('viewPath'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|digits:8',
            'website' => 'required|url',
            'location' => 'required',
            'founding_date' => 'required|date',
            'type' => 'required'

        ]);

        $organization = new Organization();
        $organization->name = $request->input('name');
        $organization->description = $request->input('description');
        $organization->email = $request->input('email');
        $organization->phone_number = $request->input('phone_number');
        $organization->website = $request->input('website');
        $organization->location = $request->input('location');
        $organization->founding_date = $request->input('founding_date');
        $organization->type = $request->input('type');
        $organization->archived = false;


        $organization->save();

        return redirect()->route('organizations.index')
            ->with('success', 'Organization created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        $viewPath = 'BackOffice.organization.table';

        return view('BackOffice.template', compact('organization', 'viewPath'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        $viewPath = 'BackOffice.organization.forms';

        return view('BackOffice.template', compact('organization', 'viewPath'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organization $organization)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|digits:8',
            'website' => 'required|url',
            'location' => 'required',
            'founding_date' => 'required|date',
            'type' => 'required'

        ]);

        $organization->update($request->all());
        return redirect()->route('organizations.index')

            ->with('success', 'Organization updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        $organization->delete();

        return redirect()->route('organizations.index')

            ->with('success', 'Organization deleted successfully');
    }
}
