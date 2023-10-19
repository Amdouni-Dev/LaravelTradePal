<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;
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
    public function participationsForAdmin(){
//return "hi Mounaaaa";
        $viewPath = 'Event.admin.participations'; // Set the view path

        $listparticipations = Participation::latest()->paginate(5);

        return view('BackOffice.template',compact('viewPath','listparticipations'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $events = Event::all();
        return view('BackOffice.template', ['viewPath' => 'Event.admin.addParticipation', 'events' => $events]);
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
//        $participation->nomUser=$request->input('nomUser');

        $participation->proposedObject=$request->input('proposedObject');
        $participation->descriptionObject=$request->input('descriptionObject');
        $participation->changedBy=$request->input('changedBy');
        $participation->event_id=$request->input('event_id');
        $participation->save();
        return redirect('/dashboard/participations');

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
    public function edit($id,Request $request)
    {
        //
        $events = Event::all();
        $participation=Participation::find($request->id);
//        return view('edit',compact('event'));
        return view('BackOffice.template', ['viewPath' => 'Event.admin.editParticipation', 'events' => $events],compact('participation'));


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
//        $participation->nomUser=$request->input('nomUser');
//        $participation->proposedObject=$request->input('proposedObject');
//        $participation->descriptionObject=$request->input('descriptionObject');
//        $participation->changedBy=$request->input('changedBy');
        $participation->event_id=$request->input('event_id');
        $participation->save();
        return redirect('/dashboard/participations')->with('success', 'Participation mise à jour avec succès.');    }

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
        return redirect('/dashboard/participations')->with('success','Participation supprimée avec succès');
    }
}
