<?php

namespace App\Http\Controllers\Event;

use App\Models\Participation;
use Illuminate\Http\Request;

class ParticipationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $listParticipation=Participation::all();
        return view('Participation.participations',compact('listParticipation'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        //
        return view('Participation.AddParticipation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        //
        $participation=new Participation();
        $participation->nomUser=$request->input('nomUser');

        $participation->proposedObject=$request->input('proposedObject');
        $participation->descriptionObject=$request->input('descriptionObject');
        $participation->changedBy=$request->input('changedBy');
        $participation->save();
        return redirect('/participations');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        //
        $participation=Participation::find($id);
        return view('Participation/edit', compact('participation'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        //
        $participation=Participation::find($id);
        $participation->nomUser=$request->input('nomUser');
        $participation->proposedObject=$request->input('proposedObject');
        $participation->descriptionObject=$request->input('descriptionObject');
        $participation->changedBy=$request->input('changedBy');
        $participation->save();
        return redirect('/participations')->with('success', 'Participation modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        //
        $participation=Participation::find($id);
        $participation->delete();
        return redirect('/participations')->with('success','Participation supprimée avec succès');
    }
}
