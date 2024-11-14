@extends('layouts.app')

@section('content')
    @php
        // Define background images for each team
        $teamBackgrounds = [
            'FC Barcelona' => 'Barcelona.jpg',  // Image for FC Barcelona
            'Real Madrid' => 'realmadird.jpg',  // Image for Real Madrid
            'Legend Team' => 'Legend_Team.jpg',  // Image for Legend Team
        ];

        // Set the default background image if no team matches
        $backgroundImage = $teamBackgrounds[$team->name] ?? 'default-bg.jpg';
    @endphp

    <!-- Container with dynamic background image based on the team -->
    <div class="container text-center py-12 mt-0" 
         style="background-image: url('{{ asset("storage/backgrounds/" . $backgroundImage) }}'); background-size: cover; background-position: center; min-height: 100vh; padding-top: 0;">
        
         <!-- Centered Team Name and City -->
        <h1 class="text-3xl font-bold text-white font-sans">{{ $team->name }}</h1>
        <p class="text-lg text-gray-200">{{ $team->city }}</p>

        <!-- Players Section -->
        <h2 class="mt-6 text-xl font-semibold text-white">Players</h2>
        @if ($team->players->isEmpty())
            <p class="text-white">No players found for this team.</p>
        @else
            <!-- Center the player grid and make it responsive -->
            <ul class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8 justify-items-center">
                @foreach ($team->players as $player)
                    <li class="flex flex-col items-center">
                        <!-- Display player photo -->
                        @if ($player->image)  <!-- Use 'image' if the field is called 'image' in your database -->
                            <img src="{{ asset('storage/players/' . $player->image) }}" alt="{{ $player->name }}" class="w-32 h-32 rounded-full object-cover">
                        @else
                            <img src="https://via.placeholder.com/150" alt="Default Photo" class="w-32 h-32 rounded-full object-cover">
                        @endif

                        <!-- Player Name and Info -->
                        <p class="mt-2 text-yellow-400">{{ $player->name }}</p> <!-- Changed text color to yellow -->
                        <p class="text-yellow-400">#{{ $player->number }} - {{ $player->position }}</p> <!-- Changed text color to yellow -->

                        <!-- Button for more information about the player -->
                        <a href="{{ route('players.show', $player->id) }}" class="mt-2 inline-block bg-green-500 text-white px-4 py-2 rounded hover:bg-yellow-700 transition-colors">
                            More Info
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

    <!-- Add some custom styling -->
    <style>
        .container {
            margin-top: 0; /* Remove the space below the nav */
            padding-top: 0; /* Ensure the container reaches the top */
        }

        /* Ensure responsive image behavior */
        .team-logo-container img {
            max-width: 100%;
            height: auto;
            object-fit: contain;
        }

        /* Add padding to the top of the page for background image */
        .container {
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
    </style>
@endsection
