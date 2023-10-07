<?php
namespace App\Http\Controllers;

use App\Models\Hazelnut;
use Illuminate\Http\Request;


class HazelnutController extends Controller
{

    public function hazelnutsForUser()
    {
        return view('Hazelnut.Admin.hazelnuts');
    }

    public function hazelnutsForAdmin()
    {
        $viewPath = 'Hazelnut.Admin.hazelnuts'; // Set the view path

        $listHazelnuts = Hazelnut::latest()->paginate(5);

        return view('BackOffice.template', compact('viewPath', 'listHazelnuts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function affiche(Request $request)
    {
        $listEvents = Event::where([
            ['nom', '!=', Null],
            [function ($query) use ($request) {
                if (($term = $request->term)) {
                    $query->orWhere('nom', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ])
            ->orderBy('id', 'asc')
            ->paginate(10);

        // tri
//        $listEvents =Event::orderBy('nom')->get();
//        $listEvents =Event::where('id',1 )->orderBy('nom')->get();

        return view('events', compact('listEvents'))->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {

        return view('BackOffice.template', ['viewPath' => 'Hazelnut.Admin.add']);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $hazelnut = new Hazelnut();
        $hazelnut->amount = $request->input('amount');

        $hazelnut->save();
        return redirect('/dashboard/hazelnuts');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        //
        $hazelnut = Hazelnut::find($id);
        return view('show', compact('hazelnut'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Request $request)
    {
        //
        $hazelnut = Hazelnut::find($request->id);
//        return view('edit',compact('event'));
        return view('BackOffice.template', ['viewPath' => 'Event.admin.edit'], compact('hazelnut'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {

        $hazelnut = Event::find($id);

        $hazelnut->nom = $request->input('nameEvent');
        $hazelnut->lieu = $request->input('lieuEvent');
        $hazelnut->description = $request->input('descEvent');

        $hazelnut->date = $request->input('dateEvent');
        $hazelnut->start = $request->input('start');
        $hazelnut->end = $request->input('end');

        $hazelnut->color = $request->input('color');
        $hazelnut->save();

        return redirect('/dashboard/events')->with('success', 'Événement mis à jour avec succès.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        //
        $hazelnut = Event::find($id);
        $hazelnut->delete();
        return redirect('/dashboard/events')->with('success', 'Événement supprimé avec succès.');
    }

}
