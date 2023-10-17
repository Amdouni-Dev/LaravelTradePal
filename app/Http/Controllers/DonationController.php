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

        $viewPath = 'BackOffice.donation.table';
        $donations = Donation::latest()->paginate(5);
        return view('BackOffice.template', compact('viewPath', 'donations'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $viewPath = 'BackOffice.donation.forms';
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

        $donation = new Donation();
        $donation->user_id = $request->input('user_id');
        $donation->organization_id = $request->input('organization_id');
        $donation->amount = $request->input('amount');
        $donation->category = $request->input('category');
        $donation->item_id = $request->input('object');

        $donation->save();
        return redirect()->route('organizations.show', ['id' => $donation->organization_id])

            ->with('success', 'Donation created successfully.');
    }



    /**

     * Display the specified resource.

     *

     * @param  \App\Models\Donation  $donation

     * @return \Illuminate\Http\Response

     */

    public function show(Donation $donation)

    {

        return view('donations.show', compact('donation'));
    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Models\Donation  $donation

     * @return \Illuminate\Http\Response

     */

    public function edit(Donation $donation)

    {

        $viewPath = 'BackOffice.donation.forms';

        return view('BackOffice.template', compact('donation', 'viewPath'));
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
            'donation_id' => 'required',
            'amount' => 'required|numeric',
            'object' => 'required',

        ]);

        $donation->update($request->all());
        return redirect()->route('donations.index')

            ->with('success', 'Donation updated successfully');
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

            ->with('success', 'Donation deleted successfully');
    }
}
