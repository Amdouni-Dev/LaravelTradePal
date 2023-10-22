<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\Donation;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        $organizations = Organization::latest()->simplePaginate(5);
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
            'type' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif',
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

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');

            $organizationName = preg_replace('/[^a-zA-Z0-9]/', '_', $request->input('name'));

            $fileName = $organizationName . '_' . time() . '.' . $file->getClientOriginalExtension();

            $file->move('organization_logos', $fileName);

            $organization->logo = $fileName;
        }

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
    public function show($id)
    {
        $userID = Auth::id();
        $organization = Organization::leftJoin('donations', 'organizations.id', '=', 'donations.organization_id')
            ->where('organizations.id', $id)
            ->select('organizations.id', 'organizations.name', 'organizations.description', 'organizations.type', 'organizations.location', 'organizations.phone_number', 'organizations.email', 'organizations.website', 'organizations.founding_date', 'organizations.logo', DB::raw('IFNULL(SUM(donations.amount), 0) as total_donations'))
            ->groupBy('organizations.id', 'organizations.name', 'organizations.description', 'organizations.type', 'organizations.location', 'organizations.phone_number', 'organizations.email', 'organizations.website', 'organizations.founding_date', 'organizations.logo')
            ->first();
        if (!$organization) {
            abort(404);
        }
        $items = $this->getItemsForUser($userID, 'DISPONIBLE');
        $donations = $this->getDonatedItems($organization->id);
        Log::info(print_r($donations, true));

        return view('FrontEnd.Organization.profile', compact('organization', 'items', 'donations'));
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

    // FrontOffice Functions
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexFrontOffice()
    {
        $organizations = Organization::all();
        return view('Frontend.Organization.list', compact('organizations'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $organizations = Organization::where('name', 'like', '%' . $searchTerm . '%')->get();
        return response()->json($organizations);
    }

    public function getItemsForUser($userID, $status)
    {
        return Item::where('user_id', $userID)
            ->where('status', $status)
            ->get()
            ->all();
    }

    public function getDonatedItems($organizationId)
    {
        $donatedItems = Item::join('donations', 'items.id', '=', 'donations.item_id')
            ->where('donations.organization_id', $organizationId)
            ->where('donations.category', 'object')
            ->whereNotNull('items.id')
            ->get();

        return $donatedItems;
    }
}
