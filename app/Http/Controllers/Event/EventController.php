<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function eventsForUser(){
//return "hi Mounaaaa";
        return view('Event.user.events');
    }
    public function eventsForAdmin(){
//return "hi Mounaaaa";
        $viewPath = 'Event.admin.events'; // Set the view path

        $listEvents = Event::latest()->paginate(5);

        return view('BackOffice.template',compact('viewPath','listEvents'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function affiche(Request $request){
        $listEvents = Event::where([
            ['nom', '!=', Null],
            [function($query) use ($request){
                if(($term =$request->term)){
                    $query->orWhere('nom','LIKE','%'.$term.'%')->get();
                }
            }  ]
        ])
            ->orderBy('id','asc')
            ->paginate(10);

        // tri
//        $listEvents =Event::orderBy('nom')->get();
//        $listEvents =Event::where('id',1 )->orderBy('nom')->get();

        return view('events',compact('listEvents'))->with('i',(request()->input('page',1)-1)*5);
    }


    public function rechercheParDate(Request $request){
        $listEvents = Event::where([
            ['date', '!=', Null],
            [function($query) use ($request){
                if(($term =$request->term)){
                    $query->orWhere('date','LIKE','%'.$term.'%')->get();
                }
            }  ]
        ])
            ->orderBy('id','asc')
            ->paginate(10);

        // tri
//        $listEvents =Event::orderBy('nom')->get();
//        $listEvents =Event::where('id',1 )->orderBy('nom')->get();

        return view('events',compact('listEvents'))->with('i',(request()->input('page',1)-1)*5);
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

        return view('BackOffice.template', ['viewPath' => 'Event.admin.add']);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $event=new Event;
        $event->nom=$request->input('nameEvent');
        $event->lieu=$request->input('lieuEvent');
        $event->description=$request->input('descEvent');

        $event->date=$request->input('dateEvent');
        $event->start=$request->input('start');
        $event->end=$request->input('end');

                $event->color=$request->input('color');

        $event->save();
        return redirect('/dashboard/events');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        //
        $event=Event::find($id);
        return view('show',compact('event'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Request $request)
    {
        //
        $event=Event::find($request->id);
//        return view('edit',compact('event'));
        return view('BackOffice.template', ['viewPath' => 'Event.admin.edit'],compact('event'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {

        $event = Event::find($id);

        $event->nom = $request->input('nameEvent');
        $event->lieu=$request->input('lieuEvent');
        $event->description=$request->input('descEvent');

        $event->date=$request->input('dateEvent');
        $event->start=$request->input('start');
        $event->end=$request->input('end');

        $event->color=$request->input('color');
        $event->save();

        return redirect('/dashboard/events')->with('success', 'Événement mis à jour avec succès.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        //
        $event=Event::find($id);
        $event->delete();
        return redirect('/dashboard/events')->with('success', 'Événement supprimé avec succès.');
    }

}
