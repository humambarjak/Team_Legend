@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Centered "Teams" Title with Poppins Font -->
        <h1 class="text-3xl font-bold text-center mt-12 mb-8" style="font-family: 'Poppins', sans-serif;">Teams</h1>

        @if ($teams->isEmpty())
            <p class="text-center">No teams found.</p>
        @else
            <ul class="grid grid-cols-2 gap-8">
                @foreach ($teams as $team)
                    <li class="flex flex-col items-center">
                        <!-- Display team logo with larger size and animation -->
                        <div class="team-logo-container">
                            @if ($team->logo)
                                <!-- Correctly reference the logo stored in the 'storage/logos/' directory -->
                                <img src="{{ asset('storage/logos/' . $team->logo) }}" alt="{{ $team->name }}" class="team-logo">
                            @else
                                <!-- Fallback image if logo is not available -->
                                <img src="https://via.placeholder.com/150" alt="Default Logo" class="team-logo">
                            @endif
                        </div>

                        <!-- Bold Team Name below the logo without blue color and underline -->
                        <div class="mt-4">
                            <a href="{{ route('teams.show', $team->id) }}" class="team-name">
                                {{ $team->name }} - {{ $team->city }}
                            </a>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

    <!-- Add the new custom CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap');
        
        /* Simple styling for the Teams title with Poppins font */
        .teams-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 900; /* Bold font weight */
        }

        .team-logo-container {
            transition: transform 0.3s ease;
        }

        .team-logo-container:hover {
            transform: scale(1.1); /* Zoom in on hover */
        }

        .team-logo {
            width: 150px;  /* Adjust the size of the logo */
            height: 150px; /* Adjust the size of the logo */
            object-fit: contain; /* Ensure the logo maintains its aspect ratio */
        }

        .team-name {
            font-size: 1.25rem; /* Slightly bigger text */
            font-weight: bold;  /* Make the name bold */
            color: black;       /* Remove blue color */
            text-decoration: none; /* Remove underline */
            margin-top: 10px;
            text-align: center;
        }

        .team-name:hover {
            color: black; /* Keep black color on hover */
        }

        /* Add more space above the "Teams" title */
        h1 {
            margin-top: 60px; /* Move title further down */
        }
    </style>
@endsection
