<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;

use App\Models\Event;
use App\Models\Participation;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{

    public function eventsForUser(){
        return view('Event.user.events');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function eventsForAdmin(Request $request){
        $viewPath = 'Event.admin.events';
        $listEvents = Event::paginate(5);
        $listEvents2 = Event::simplePaginate(5);
        return view('BackOffice.template',compact('viewPath','listEvents','listEvents2'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function stat(){

        $viewPath = 'Event.admin.statEvent';

        $events = Event::all();
        $participations = Participation::all();

        // Vous pouvez extraire les données souhaitées ici, par exemple, le nombre de participations par événement.
        $participationCountByEvent = $events->map(function ($event) use ($participations) {
            return $participations->where('event_id', $event->id)->count();
        });
        $categories = Event::groupBy('categorie')
            ->select('categorie', DB::raw('count(*) as count'))
            ->get();
        return view('BackOffice.template',compact('viewPath','events', 'participationCountByEvent','categories'))
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
        $categories = ['Vêtements', 'Électronique', 'Nourriture', 'Autre'];
        return view('BackOffice.template', ['viewPath' => 'Event.admin.add',
            'categories' => $categories
            ]);

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
        $event->categorie=$request->input('categorie');
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
        return redirect('/dashboard/events')->with('success', 'Evenement Ajouté avec Succes ');;
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
//    public function show($id)
//    {
//        $event = Event::find($id);
//
//        $eventDate = $event->date;
//
//
//        $similarEventIds = Event::where('date', $eventDate)
//            ->where('id', '!=', $id)
//            ->pluck('id');
//
//        $participationsSimilar = Participation::whereIn('event_id', $similarEventIds)->get();
//
//
//        $latestParticipationsSimilar = $participationsSimilar->sortByDesc('created_at');
////        dd($latestParticipationsSimilar->first()->user->name);
////        $lastUserParticip=$latestParticipationsSimilar->first()->user->name ;
////        $latestSimilarParticipation = null;
////        foreach ($latestParticipationsSimilar as $participation) {
////            if ($participation->event_id == $id) {
////                $latestSimilarParticipation = $participation;
////                break;
////            }
////        }
//
//
////        $latestParticipantName = $lastUserParticip ? $latestParticipation->user->name : 'Aucun participant';
//
//        $similarEvents = Event::where('date', $eventDate)
//            ->where('id', '!=', $id)
//            ->get();
//        $user = auth()->user();
//        $isParticipated = Participation::where('event_id', $id)
//            ->where('user_id', $user->id)
//            ->exists();
//        return view('BackOffice.template', [
//            'viewPath' => 'Event.admin.show',
//            'event' => $event,
////            'latestParticipantName' => $latestParticipantName,
//            'similarEvents' => $similarEvents,
////            'latestParticipation' => $latestParticipation,
//            'latestParticipationsSimilar' => $latestParticipationsSimilar,
//            'isParticipated' => $isParticipated,
////            'lastUserParticip'=>$lastUserParticip,
//        ]);
//    }

    public function show($id)
    {
        $event = Event::find($id);
//        dd($event);

        if (!$event) {
            // Gérer le cas où l'événement n'a pas été trouvé, par exemple, rediriger vers une page d'erreur.
            return view('backOffice.404');
        }

        $eventDate = $event->date;

        $similarEvents = Event::whereDate('date', $eventDate)
            ->where('id', '!=', $id)
            ->get();

        $participationsSimilar = Participation::whereIn('event_id', $similarEvents->pluck('id'))->get();

        $latestParticipationsSimilar = $participationsSimilar->sortByDesc('created_at');

        $user = auth()->user();
        if($user) {
            $isParticipated = Participation::where('event_id', $id)
                ->where('user_id', $user->id)
                ->exists();
        }
        else{
            return redirect('/login')->with('success', 'vous devez etre connecté pour voir ls evenements ');
        }
        return view('BackOffice.template', [
            'viewPath' => 'Event.admin.show',
            'event' => $event,
            'similarEvents' => $similarEvents,
            'latestParticipationsSimilar' => $latestParticipationsSimilar,
            'isParticipated' => $isParticipated,
        ]);
    }


public function  show2($id){
    $event = Event::find($id);
//        dd($event);

    if (!$event) {
        // Gérer le cas où l'événement n'a pas été trouvé, par exemple, rediriger vers une page d'erreur.
        return view('backOffice.404');
    }

    $eventDate = $event->date;

    $similarEvents = Event::whereDate('date', $eventDate)
        ->where('id', '!=', $id)
        ->get();

    $participationsSimilar = Participation::whereIn('event_id', $similarEvents->pluck('id'))->get();

    $latestParticipationsSimilar = $participationsSimilar->sortByDesc('created_at');

    $user = auth()->user();
    if($user) {
        $isParticipated = Participation::where('event_id', $id)
            ->where('user_id', $user->id)
            ->exists();
    }
    else{
        return redirect('/login')->with('success', 'vous devez etre connecté pour voir ls evenements ');
    }
    return view('Event.user.showDetailsEvent', [
        'viewPath' => 'Event.admin.show',
        'event' => $event,
        'similarEvents' => $similarEvents,
        'latestParticipationsSimilar' => $latestParticipationsSimilar,
        'isParticipated' => $isParticipated,
    ]);
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

        $validator = Validator::make($request->all(), [
            'nameEvent' => 'required',
            'lieuEvent' => 'required',
            'descEvent' => 'required',
            'dateEvent' => 'required|date',
            'start' => [
                'required',
                'date_format:Y-m-d\TH:i',
                function ($attribute, $value, $fail) use ($request) {
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
        ]);

        if ($validator->fails()) {
            return redirect('/dashboard/events/' . $id )->withErrors($validator)->withInput();
        }

        $event->nom = $request->input('nameEvent');
        $event->lieu = $request->input('lieuEvent');
        $event->description = $request->input('descEvent');
        $event->date = $request->input('dateEvent');
        $event->start = $request->input('start');
        $event->end = $request->input('end');
        $event->color = $request->input('color');
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
    public function participerEvent($event_id, $user_id)
    {

        if (auth()->check()) {

            $event = Event::find($event_id);


            if ($event) {

                $participation = new Participation();
                $participation->user_id = $user_id;
                $participation->event_id = $event_id;
                $participation->proposedObject="Objet";

                                $participation->changedBy="Objet";

                                $participation->descriptionObject="Objet";

                $participation->save();


                return redirect("/JeParticipe");
            } else {

                return view('backOffice.404');
            }
        } else {

            return redirect("/login");
        }}

    public function generatePdf($id)
    {
        $event = Event::find($id);


        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $pdf = new Dompdf($options);


        $pdfContent = view('Event.admin.pdf_view', compact('event'))->render();
        $pdf->loadHtml($pdfContent);


        $pdf->setPaper('A4', 'portrait');

        // Rendre le PDF
        $pdf->render();


        $pdfOutput = $pdf->output();


        $filename = $event->id.'.pdf';
        return response($pdfOutput)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', "inline; filename=$filename");
    }

}
