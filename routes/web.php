<?php

use App\Http\Controllers\Event\EventController;
use App\Http\Controllers\Event\ParticipationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FrontEnd\ProfileController;
use App\Http\Controllers\FrontEnd\BaremeController;
use App\Http\Controllers\FrontEnd\WorkController;
use App\Http\Controllers\FrontEnd\GameController;
use App\Http\Controllers\FrontEnd\TrocController;
use App\Http\Controllers\FrontEnd\SearchController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\DonationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('FrontEnd/index');
// });

Route::get('/',  [IndexController::class, 'index']);
Route::get('/login',  [LoginController::class, 'index']);
Route::get('/profile',  [ProfileController::class, 'index']);
Route::get('/bareme',  [BaremeController::class, 'index']);
Route::get('/work',  [WorkController::class, 'index']);
Route::get('/game',  [gameController::class, 'index']);
Route::get('/add-troc',  [trocController::class, 'index']);
Route::get('/search',  [searchController::class, 'index']);
Route::get('/blogs',  [BlogController::class, 'listing']);
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blogs.show');
Route::get('/JeParticipe', [EventController::class, "eventsForUser"]);
Route::prefix('dashboard')->group(function () {
    Route::get('/blog/add', [BlogController::class, 'create']);
    Route::get('/comments/add',  [BlogController::class, 'create']);
    Route::get('/blogs', [BlogController::class, 'index']);
    Route::get('/comments',  [BlogController::class, 'index']);
    Route::get('/events', [EventController::class, 'eventsForAdmin']);
    Route::get('/events/add', [EventController::class, 'create']);
    Route::post('/events/add', [EventController::class, 'store'])->name('events.store');

    Route::get('/events/{id}', [EventController::class, 'edit'])->name('events.edit');
    Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');
    Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
    Route::get('/events2', [EventController::class, 'affiche'])->name('events.index');

    Route::get('/events', [EventController::class, 'rechercheParDate'])->name('events.rechercheParDate');
    Route::get('/eventsDetails/{id}', [EventController::class, 'show'])->name('events.show');


    Route::get('/participations', [ParticipationController::class, 'participationsForAdmin']);
    Route::get('/participations/create', [ParticipationController::class, 'create']);

    Route::post('/participations', [ParticipationController::class, 'store'])->name('participations.store');
    Route::get('/participations/edit/{id}', [ParticipationController::class, 'edit'])->name('participations.edit');
    Route::put('/participations/{id}', [ParticipationController::class, 'update'])->name('participations.update');
    Route::delete('/participations/{id}', [ParticipationController::class, 'destroy'])->name('participation.destroy');
    Route::get('/blogs',  [BlogController::class, 'index']);
    Route::resource('/organizations', OrganizationController::class);
    Route::resource('/blogs', BlogController::class);
    Route::resource('/donations', DonationController::class);
    Route::resource('/comments', CommentController::class);

    /************************************************HAZELNUTS*/
    Route::get('/hazelnuts', [\App\Http\Controllers\HazelnutController::class, 'hazelnutsForAdmin']);
    Route::get('/hazelnuts/add', [\App\Http\Controllers\HazelnutController::class, 'create']);
    Route::post('/hazelnuts/add', [\App\Http\Controllers\HazelnutController::class, 'store'])->name('hazelnuts.store');


    /************************************************CLAIMS*/
    Route::get('claims', [\App\Http\Controllers\ClaimController::class, 'claimsForAdmin']);

    /************************************************RESPONSES*/



    Route::fallback(function () {
        return view('backOffice.404');
    });
    Route::resource('item',  ItemController::class);
    Route::resource('request',  RequestController::class);
});
Route::get('/organizations/{id}', [OrganizationController::class, 'show'])->name('organizations.show');
Route::get('/organizations', [OrganizationController::class, 'indexFrontOffice'])->name('organizations.indexFrontOffice');
Route::get('/search-organizations', [OrganizationController::class, 'search'])->name('organizations.search');
Route::post('/donations/add', [DonationController::class, 'store']);
