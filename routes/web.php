<?php

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
use App\Http\Controllers\OrganizationController;

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
Route::get('/JeParticipe',[App\Http\Controllers\Event\EventController::class,"sayhitoMouna"]);
Route::prefix('dashboard')->group(function () {
    Route::get('/blog/add',  [BlogController::class, 'create']);
    Route::get('/blogs',  [BlogController::class, 'index']); 
    Route::get('/organization/add',  [OrganizationController::class, 'create']);
    Route::get('/organization/list',  [OrganizationController::class, 'index']); 
});
Route::fallback(function () {
    return view('backOffice.404'); 
});