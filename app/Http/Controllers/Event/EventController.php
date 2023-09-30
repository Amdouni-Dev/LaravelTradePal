<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function sayhitoMouna(){
//return "hi Mounaaaa";
        return view('Event.admin.events');
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
        //
        return view('form');
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

        $event->save();
        return redirect('/events');
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
        return view('edit',compact('event'));

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
        // Récupérez l'événement en fonction de l'ID
        $event = Event::find($id);

        // Mettez à jour les champs de l'événement avec les données du formulaire
        $event->nom = $request->input('nameEvent');
        // Mettez à jour d'autres champs de la même manière

        // Enregistrez les modifications
        $event->save();

        // Redirigez l'utilisateur vers la page des événements ou une autre page appropriée
        return redirect('/events')->with('success', 'Événement mis à jour avec succès.');
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
        return redirect('/events')->with('success', 'Événement supprimé avec succès.');
    }

}
