@extends('layouts.app')

@section('content')

<!-- Banner Section -->
<div class="bg-purple-700 text-white text-center py-4 rounded-lg mb-6">
    <h1 class="text-3xl font-bold">Window is Closed</h1>
    <p>Friday 14 June - Friday 30 August at 23:00 BST</p>
</div>

<!-- Key Transfers Section -->
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mb-6">
    <h2 class="text-2xl font-bold text-purple-700 mb-4">Key Transfers</h2>
    <div class="flex overflow-x-auto space-x-6">
        <!-- Transfer 1 -->
        <a href="https://www.chelseafc.com/en/news/article/jadon-sancho-completes-chelsea-move" target="_blank" class="min-w-[200px] bg-gray-100 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <img src="{{ asset('storage/transfers/sansho.jpg') }}" alt="Transfer 1" class="w-full h-40 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-lg font-bold">Sancho joins Chelsea</h3>
                <p>on loan from Man Utd</p>
            </div>
        </a>

        <!-- Transfer 2 -->
        <a href="https://www.arsenal.com/news/raheem-sterling-signs-arsenal-loan" target="_blank" class="min-w-[200px] bg-gray-100 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <img src="{{ asset('storage/transfers/starling.jpg') }}" alt="Transfer 2" class="w-full h-40 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-lg font-bold">Sterling joins Arsenal</h3>
                <p>on loan from Chelsea</p>
            </div>
        </a>

        <!-- Transfer 3 -->
        <a href="https://www.manutd.com/en/news/detail/transfer-news-manuel-ugarte-signs-from-psg" target="_blank" class="min-w-[200px] bg-gray-100 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <img src="{{ asset('storage/transfers/Ugarte .jpg') }}" alt="Transfer 3" class="w-full h-40 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-lg font-bold">Man Utd sign Ugarte</h3>
                <p>from Paris Saint-Germain</p>
            </div>
        </a>

        <!-- Transfer 4 -->
        <a href="https://www.cpfc.co.uk/news/announcement/trevoh-chalobah-joins-crystal-palace-on-loan/" target="_blank" class="min-w-[200px] bg-gray-100 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <img src="{{ asset('storage/transfers/chalobah.jpg') }}" alt="Transfer 4" class="w-full h-40 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-lg font-bold">Chalobah joins Crystal Palace</h3>
                <p>on loan from Chelsea</p>
            </div>
        </a>

        <!-- Transfer 5 -->
        <a href="https://www.cpfc.co.uk/news/announcement/eddie-nketiah-signs-for-crystal-palace/" target="_blank" class="min-w-[200px] bg-gray-100 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <img src="{{ asset('storage/transfers/Nketiah.jpg') }}" alt="Transfer 5" class="w-full h-40 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-lg font-bold">Nketiah signs for Crystal Palace</h3>
                <p>from Arsenal</p>
            </div>
        </a>

        <!-- Transfer 6 -->
        <a href="https://www.wolves.co.uk/news/mens-first-team/20240830-andre-signs-on-deadline-day/" target="_blank" class="min-w-[200px] bg-gray-100 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <img src="{{ asset('storage/transfers/Andra.jpg') }}" alt="Transfer 6" class="w-full h-40 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-lg font-bold">Wolves sign Brazilian midfielder Andre</h3>
                <p>from Brazilian League</p>
            </div>
        </a>
    </div>
</div>

<!-- Original Content -->
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
        {{ __('You\'re logged in!') }}
    </div>
</div>

@endsection
