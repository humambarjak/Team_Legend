@extends('layouts.app')

@section('content')
<div class="container mx-auto flex justify-center items-center mt-10">
    <div class="form-container bg-white shadow-lg rounded-lg p-10 w-full max-w-lg">
        <h1 class="text-3xl font-semibold text-gray-800 text-center mb-6">Create Your Player</h1>

        <!-- Form -->
        <form action="{{ route('players.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Player Image -->
            <div class="mb-6">
                <label for="image" class="block text-sm font-medium text-gray-700">Player Picture:</label>
                <input type="file" name="image" id="image" class="mt-2 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" accept="image/*" onchange="previewImage(event)">
                <div class="mt-4">
                    <img id="imagePreview" src="" alt="Image Preview" class="w-32 h-32 object-cover rounded-lg shadow-md border" style="display: none;">
                </div>
            </div>

            <!-- Player Name -->
            <div class="mb-6">
                <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                <input type="text" name="name" id="name" class="mt-2 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Player name">
            </div>

            <!-- Player Rating -->
            <div class="mb-6">
                <label for="rating" class="block text-sm font-medium text-gray-700">Rating:</label>
                <input type="number" name="rating" id="rating" class="mt-2 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Player rating">
            </div>

            <!-- Position -->
            <div class="mb-6">
                <label for="position" class="block text-sm font-medium text-gray-700">Position:</label>
                <input type="text" name="position" id="position" class="mt-2 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Position (e.g., ST, CM)">
            </div>

            <!-- Card Type -->
            <div class="mb-6">
                <label for="card_type" class="block text-sm font-medium text-gray-700">Card Type:</label>
                <select name="card_type" id="card_type" class="mt-2 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="Icon">Icon</option>
                    <option value="Gold">Gold</option>
                    <option value="Silver">Silver</option>
                    <option value="Bronze">Bronze</option>
                </select>
            </div>

            <!-- Card Version -->
            <div class="mb-6">
                <label for="card_version" class="block text-sm font-medium text-gray-700">Card Version:</label>
                <select name="card_version" id="card_version" class="mt-2 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="EA FC 25">EA FC 25</option>
                    <option value="FIFA 23">FIFA 23</option>
                    <option value="FIFA 22">FIFA 22</option>
                </select>
            </div>

            <!-- PlayStyle Plus -->
            <div class="mb-6">
                <label for="playstyle" class="block text-sm font-medium text-gray-700">PlayStyle Plus:</label>
                <input type="text" name="playstyle" id="playstyle" class="mt-2 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., Power Shot">
            </div>

            <!-- Club -->
            <div class="mb-6">
                <label for="club" class="block text-sm font-medium text-gray-700">Club:</label>
                <input type="text" name="club" id="club" class="mt-2 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Club">
            </div>

            <!-- League -->
            <div class="mb-6">
                <label for="league" class="block text-sm font-medium text-gray-700">League:</label>
                <input type="text" name="league" id="league" class="mt-2 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="League">
            </div>

            <!-- Nation -->
            <div class="mb-6">
                <label for="nation" class="block text-sm font-medium text-gray-700">Nation:</label>
                <input type="text" name="nation" id="nation" class="mt-2 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Nation">
            </div>
<!-- Assign to Team -->
<div class="mb-6">
    <label for="team_id" class="block text-sm font-medium text-gray-700">Assign to Team:</label>
    <select name="team_id" id="team_id" class="mt-2 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        @foreach($teams as $team)
            <option value="{{ $team->id }}">{{ $team->name }}</option>
        @endforeach
    </select>
</div>


            <!-- Submit Button -->
            <div class="flex justify-between">
                <button type="submit" class="bg-purple-700 text-white font-bold py-2 px-4 rounded-lg mb-4">Create Player</button>
                <a href="{{ route('legend.players') }}" class="bg-blue-700 text-white font-bold py-2 px-4 rounded-lg mb-4">Go to Legend Players</a>
            </div>
        </form>
    </div>
</div>

@if(session('success'))
    <div class="bg-green-500 text-white font-bold rounded-lg p-4 mb-4">
        {{ session('success') }}
    </div>
@endif

<!-- Image Preview JavaScript -->
<script>
    function previewImage(event) {
        const input = event.target;
        const imagePreview = document.getElementById('imagePreview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection

<!-- Custom Styles -->
<style>
    .form-container {
        background-color: #f9fafb;
        border: 1px solid #e5e7eb;
        padding: 20px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
    }

    input[type="file"] {
        border: none;
        background: #f0f4f8;
    }

    .form-container h1 {
        margin-bottom: 1.5rem;
    }

    .form-container form .mb-6 {
        margin-bottom: 1.5rem;
    }
</style>
