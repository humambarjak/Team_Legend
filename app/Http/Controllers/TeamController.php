<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    // Show all teams
    public function index()
    {
        $teams = Team::all(); // Fetch all teams (Barcelona and Real Madrid)

        return view('teams.index', compact('teams'));
    }

    // Show specific team and its players
    public function show(Team $team)
    {
        // Eager load the players when fetching the team
        $team = Team::with('players')->findOrFail($team->id);

        return view('teams.show', compact('team'));
    }
}
