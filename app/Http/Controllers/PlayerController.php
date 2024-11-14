<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use Illuminate\Support\Facades\Storage;
use App\Models\Team; // Add this at the top of your controller

class PlayerController extends Controller
{
    // Display the create player form
    public function create()
    {
        $teams = Team::all(); // Fetch teams
        return view('players.create', compact('teams')); // Ensure the correct view path
    }
    

    public function store(Request $request)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'rating' => 'required|numeric',
            'position' => 'required|string|max:255',
            'card_type' => 'required|string|max:255',
            'card_version' => 'required|string|max:255',
            'playstyle' => 'nullable|string|max:255',
            'club' => 'required|string|max:255',
            'league' => 'required|string|max:255',
            'nation' => 'required|string|max:255',
            'image' => 'nullable|image',
            'team_id' => 'required|exists:teams,id', // Ensure team_id is required and exists in teams table
        ]);

    // Handle file upload
    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('players', 'public');
    }

    // Create the new player
    Player::create([
        'name' => $request->input('name'),
        'rating' => $request->input('rating'),
        'position' => $request->input('position'),
        'card_type' => $request->input('card_type'),
        'card_version' => $request->input('card_version'),
        'playstyle' => $request->input('playstyle'),
        'club' => $request->input('club'),
        'league' => $request->input('league'),
        'nation' => $request->input('nation'),
        'image' => $imagePath,
        'team_id' => $request->input('team_id'), // Assign team_id
    ]);

    return redirect()->route('legend.players')->with('success', 'Player created successfully!');

}
public function index()
{
    $players = Player::all(); // Fetch all players
    return view('players.index', compact('players')); // Pass players to the view
}


    // Show all players in the legends page
    public function showLegends()
    {
        // Fetch all players
        $players = Player::all();

        // Pass players to the view
        return view('legends', compact('players'));
    }
    
    public function legendPlayers()
    {
        $teamLegend = Team::where('name', 'Legend Team')->first();
    
        if (!$teamLegend) {
            return redirect()->route('legends')->with('error', 'Legend Team not found.');
        }
    
        $players = Player::where('team_id', $teamLegend->id)->get();
        return view('legends', compact('players'));
    }
    
}


    
