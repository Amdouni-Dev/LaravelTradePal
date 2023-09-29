<?php

  

namespace App\Http\Controllers;

  

use App\Models\Donation;

use Illuminate\Http\Request;

  

class DonationController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $donations = Donation::latest()->paginate(5);

      

        return view('donations.index',compact('donations'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

  

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('donations.create');

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

        'user_id' => 'required', 
        'category' => 'required',
        'timestamp' => 'required|date', 
        'organization_id' => 'required', 
        'amount' => 'required|numeric', 
        'object' => 'required',

        ]);

        Donation::create($request->all());

        return redirect()->route('donation.index')

                        ->with('success','Donation created successfully.');

    }

  

    /**

     * Display the specified resource.

     *

     * @param  \App\Models\Donation  $donation

     * @return \Illuminate\Http\Response

     */

    public function show(Donation $donation)

    {

        return view('donations.show',compact('donation'));

    }

  

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Models\Donation  $donation

     * @return \Illuminate\Http\Response

     */

    public function edit(Donation $donation)

    {

        return view('donations.edit',compact('donation'));

    }

  

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Models\Donation  $donation

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Donation $donation)

    {

        $request->validate([

        'user_id' => 'required', 
        'category' => 'required',
        'timestamp' => 'required|date', 
        'organization_id' => 'required', 
        'amount' => 'required|numeric', 
        'object' => 'required',

        ]);

        $donation->update($request->all());
        return redirect()->route('donations.index')

                        ->with('success','Donation updated successfully');

    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Models\Donation  $donation

     * @return \Illuminate\Http\Response

     */

    public function destroy(Donation $donation)

    {

        $donation->delete();

       

        return redirect()->route('donations.index')

                        ->with('success','Donation deleted successfully');

    }

}