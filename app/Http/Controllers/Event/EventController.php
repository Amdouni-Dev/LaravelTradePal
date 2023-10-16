<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{

    public function eventsForUser(){
//return "hi Mounaaaa";
        return view('Event.user.events');
    }
    public function eventsForAdmin(Request $request){
//return "hi Mounaaaa";
        $viewPath = 'Event.admin.events';

        $listEvents = Event::where([
            ['nom', '!=', Null],
            [function($query) use ($request){
                if(($term =$request->term)){
                    $query->orWhere('nom','LIKE','%'.$term.'%')->get();
                }
            }  ]
        ])
            ->orderBy('id','asc')
            ->paginate(20);

        return view('BackOffice.template',compact('viewPath','listEvents'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function affiche(Request $request){
        $viewPath = 'Event.admin.events';
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

//        return view('events',compact('listEvents'))->with('i',(request()->input('page',1)-1)*5);

        return view('BackOffice.template',compact('viewPath','listEvents'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function rechercheParDate(Request $request){
        $viewPath = 'Event.admin.events';
        $listEvents = Event::where([
            ['date', '!=', Null],
            [function($query) use ($request){
                if(($term =$request->term)){
                    $query->orWhere('date','LIKE','%'.$term.'%')->get();
                }
            }  ]
        ])
            ->orderBy('id','asc')
            ->paginate(50);

        // tri
//        $listEvents =Event::orderBy('nom')->get();
//        $listEvents =Event::where('id',1 )->orderBy('nom')->get();
        return view('BackOffice.template',compact('viewPath','listEvents'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
        $event->image_path=$this->storeImage($request);
        $validator = Validator::make($request->all(), [
            'nameEvent' => 'required',
            'lieuEvent' => 'required',
            'descEvent' => 'required',
            'dateEvent' => 'required|date',
            'start' => [
                'required',
                'date_format:Y-m-d\TH:i',
                function ($attribute, $value, $fail) use ($request) {
                    // Vérifiez si l'heure de début est le même jour que la date de l'événement
                    $startDateTime = new \DateTime($value);
                    $eventDate = new \DateTime($request->input('dateEvent'));

                    if ($startDateTime->format('Y-m-d') !== $eventDate->format('Y-m-d')) {
                        $fail('L\'heure de début doit être le même jour que la date de l\'événement.');
                    }
                },
            ],
            'end' => [
                'required',
                'date_format:Y-m-d\TH:i',
                function ($attribute, $value, $fail) use ($request) {

                    $startDateTime = new \DateTime($request->input('start'));
                    $endDateTime = new \DateTime($value);

                    if ($endDateTime <= $startDateTime) {
                        $fail('L\'heure de fin doit être après l\'heure de début.');
                    }
                },
            ],
            'color' => 'required',
//            'image' => 'required',
        ]);
        if($validator->fails()){
            return redirect('/dashboard/events/add')->withErrors($validator)->withInput();
        }
//        $uploadedFile = $request->file('image');

//
//        if ($uploadedFile) {
//            $imagePath = $uploadedFile->store('public/assets/imagesForEvents');

//            $event->image_path = $imagePath;
//        }

//        dd($request->file('image')->getClientOriginalName());

//
//        $event->image=$request->file('image')->getClientOriginalName();

        $event->save();
        session()->flash('success', 'Image Upload successfully');
        return redirect('/dashboard/events');
    }


    private function storeImage($request){
        $newImageName = uniqid() . '-' .  '.' . $request->file('image')->extension();
        return $request->file('image')->move(public_path('imagesForEvents/'), $newImageName);
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
//        return view('show',compact('event'));

        return view('BackOffice.template', ['viewPath' => 'Event.admin.show', 'event' => $event]);



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
