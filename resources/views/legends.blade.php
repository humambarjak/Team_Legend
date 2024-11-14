@extends('layouts.app')

@section('content')
<div class="container mx-auto pitch-background mt-10"> <!-- Added mt-10 class here -->
    <h1 class="text-4xl text-center font-bold mb-6 text-white">Legends Team</h1>

    @if($players->count() > 0)
        <div class="grid grid-cols-3 gap-4">
            @foreach($players as $player)
                <div class="player-card @if($player->card_type == 'gold') gold 
                    @elseif($player->card_type == 'silver') silver 
                    @elseif($player->card_type == 'bronze') bronze 
                    @endif">
                    <div class="player-name-bar">{{ $player->name }}</div>
                    <img src="{{ asset('storage/' . $player->image) }}" alt="{{ $player->name }}" class="player-image">
                    <p class="player-position">{{ $player->position }}</p>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center text-xl text-gray-700">No players have been added yet.</p>
    @endif
</div>
@endsection

<!-- Custom Styles -->
<style>
     .pitch-background {
        background-image: url("{{ asset('storage/stad.png') }}");
        background-size: cover;
        background-position: center;
        padding: 40px;
        border-radius: 10px;
    }

    /* Player card style */
    .player-card {
        border-radius: 8px;
        padding: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 130px;
        margin: auto;
        color: #ffffff;
        font-weight: bold;
        position: relative;
    }

    /* Background color based on card type */
    .player-card.gold .player-name-bar {
        background-color: #FFD700; /* Gold */
    }

    .player-card.silver .player-name-bar {
        background-color: #C0C0C0; /* Silver */
    }

    .player-card.bronze .player-name-bar {
        background-color: #cd7f32; /* Bronze */
    }

    /* Style for the player name bar */
    .player-name-bar {
        width: 100%;
        padding: 5px;
        text-align: center;
        font-size: 14px;
        color: #ffffff; /* Black text on colored background */
        font-weight: bold;
        border-radius: 8px 8px 0 0;
        margin-bottom: 10px;
    }

    /* Style for player image */
    .player-image {
        width: 90px;
        height: 90px;
        object-fit: cover;
        /* border-radius: 50%;
        border: 3px solid #ffffff; */
        margin-bottom: 8px;
    }

    /* Style for player position */
    .player-position {
        font-size: 12px;
        text-align: center;
    }

    .text-white {
        color: #ffffff;
    }
</style>
