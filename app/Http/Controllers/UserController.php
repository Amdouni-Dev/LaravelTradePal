<?php

namespace App\Http\Controllers;

use App\Charts\BlogChart;
use App\Charts\UserChart;
use App\Models\Blog;
use App\Models\Claim;
use App\Models\Comment;
use App\Models\Donation;
use App\Models\Event;
use App\Models\Item;
use App\Models\Organization;
use App\Models\Participation;
use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viewPath = 'BackOffice.user.table';
        $users = User::latest()
                    ->simplePaginate(5);
        return view('BackOffice.template',compact('viewPath','users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new user.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation and store logic here
    }

    /**
     * Display the specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validation and update logic here
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Deletion logic here
    }


    
public function blockUser($id)
{
    $user = User::find($id);

    if (!$user) {
        return back()->with('error', 'Utilisateur introuvable');
    }

    $user->account_status = 'inactive';
    $user->save();

    return back()->with('success', 'L\'utilisateur a été bloqué avec succès');
}

public function activateUser($id)
{
    $user = User::find($id);

    if (!$user) {
        return back()->with('error', 'Utilisateur introuvable');
    }

    $user->account_status = 'active';
    $user->save();

    return back()->with('success', 'L\'utilisateur a été activé avec succès');
}

public function game(Request $request) {
    if (auth()->check()) {
        $user = User::find(auth()->user()->id);
        $currentHazelnuts = $user->hazelnuts;
        $winMessage = $request->input('winMessage');

        $newHazelnuts = $currentHazelnuts + $winMessage;

        $user->update([
            'hazelnuts' => $newHazelnuts,
            'winDate' => now(),
        ]);

        return redirect()->route('profile', ['id' => auth()->user()->id]);
    } else {
        return response()->json(['message' => 'Please log in to update hazelnuts and winMessage.'], 401);
    }
}

public function GamePage(){
    $today = now()->format('Y-m-d');
    $users = User::whereDate('winDate', $today)->get();
    return view('FrontEnd.game',compact('users'));
}

public function dashboard(){
    $viewPath = 'BackOffice.dashboard';

    $events = Event::all();
    $participations = Participation::all();

    $participationCountByEvent = $events->map(function ($event) use ($participations) {
        return $participations->where('event_id', $event->id)->count();
    });
    $categories = Event::groupBy('categorie')
        ->select('categorie', DB::raw('count(*) as count'))
        ->get();
        
    $itemsStat = Item::with('user')->get();
    $listClaims = Claim::latest()->simplePaginate(5);
    $claimsPerMonth = DB::table('claims')
        ->selectRaw("DATE_FORMAT(claim_date, '%M') as month")
        ->selectRaw('COUNT(*) as count')
        ->groupBy('month')
        ->get();
        
        
    $blogs = Blog::latest()->simplePaginate(5);
    $views = DB::table('blogs')
        ->selectRaw("DATE_FORMAT(publicationDate, '%D') as month")
        ->selectRaw('COUNT(*) as count')
        ->groupBy('month')
        ->get();
    
    $countUsers = User::count();
    $countOrganizations = Organization::count();
    $countBlogs = Blog::count();
    $countClaims = Claim::count();
    $countEvents = Event::count();
    $countItems = Item::count();
    $countRequests = ModelsRequest::count();
    $countDonations = Donation::count();
            
    return view('BackOffice.template',compact('viewPath','events', 'participationCountByEvent','categories','itemsStat','claimsPerMonth','blogs','views','countUsers','countBlogs','countClaims','countOrganizations','countEvents','countItems','countRequests','countDonations'));
}
}
