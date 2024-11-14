<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;
use App\Models\Player;  // <-- Import the Player model

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        // Don't create teams if they already exist. You can comment out these lines if teams are already present.
        // $teamBarcelona = Team::firstOrCreate([
        //     'name' => 'FC Barcelona',
        //     'city' => 'Barcelona',
        //     'logo' => 'barcelona.png'
        // ]);

        // Insert players directly
        $teamBarcelona = Team::where('name', 'FC Barcelona')->first();  // Fetch Barcelona team
        $barcelonaPlayers = [
            ['name' => 'Lionel Messi', 'number' => 10, 'position' => 'Forward'],
            // Add other players here
        ];

        foreach ($barcelonaPlayers as $player) {
            Player::create([
                'team_id' => $teamBarcelona->id,
                'name' => $player['name'],
                'number' => $player['number'],
                'position' => $player['position']
            ]);
        }
    }
}
