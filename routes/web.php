<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/view-teams', [TeamController::class, 'index'])->name('view-teams');
Route::get('/make-your-player', [PlayerController::class, 'create'])->name('make-your-player');
Route::post('/players', [PlayerController::class, 'store'])->name('players.store');
Route::get('/legends', [PlayerController::class, 'showLegends'])->name('legends');
Route::get('/legend-players', [PlayerController::class, 'legendPlayers'])->name('legend.players');
Route::get('/legends', [PlayerController::class, 'legendPlayers'])->name('legends');

Route::get('/players', [PlayerController::class, 'index'])->name('players.index');

// Route to view all teams
Route::get('/view-teams', [TeamController::class, 'index'])->name('view-teams');

// Route to show a specific team and its players
Route::get('/teams/{id}', [TeamController::class, 'show'])->name('teams.show');
Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');

// Route for listing teams
Route::get('/view-teams', [TeamController::class, 'index'])->name('view-teams');

// Route for displaying a specific team
Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');

Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');
Route::get('/players/{id}', [PlayerController::class, 'show'])->name('players.show');



