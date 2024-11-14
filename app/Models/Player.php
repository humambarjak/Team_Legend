<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    // Specify which fields are mass assignable
    protected $fillable = [
        'name', 'rating', 'position', 'card_type', 'card_version', 'playstyle', 
        'club', 'league', 'nation', 'image', 'team_id', 'number', 'goals', 'assists'
    ];

    // Define relationship with Team
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    // New scope to filter by position (e.g., Goalkeeper, Midfielder, etc.)
    public function scopeByPosition($query, $position)
    {
        return $query->where('position', $position);
    }

    // New scope to filter players by team
    public function scopeByTeam($query, $teamId)
    {
        return $query->where('team_id', $teamId);
    }

    // Example of a custom method to calculate the total score based on goals and assists
    public function totalScore()
    {
        return $this->goals + $this->assists;
    }
}
