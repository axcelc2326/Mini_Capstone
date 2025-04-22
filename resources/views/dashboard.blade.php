@extends('layout.layout')

@section('content')
    <div class="relative w-full min-h-screen flex flex-col justify-center items-center bg-gray-950 text-gray-300">
        <!-- Hero Section -->
        <div class="text-center max-w-3xl p-5">
            <h1 class="text-6xl font-extrabold bg-gradient-to-r from-emerald-400 via-blue-400 to-yellow-400 bg-clip-text text-transparent animate-pulse" id="hero-title">
                Lost & Found Portal
            </h1>
            <p class="text-lg text-gray-400 mt-3">
                Report lost items, find missing belongings, and help reunite items with their rightful owners.
            </p>

            <div class="mt-6 flex justify-center gap-4">
                <a href="{{ route('lost-items.index') }}"
                    class="px-6 py-3 bg-yellow-600 text-white font-semibold rounded-lg shadow-md hover:bg-yellow-700 transition transform hover:scale-110">
                    View Lost Items
                </a>
                <a href="{{ route('found-items.index') }}"
                    class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition transform hover:scale-110">
                    View Found Items
                </a>
            </div>
        </div>

        <!-- How It Works Section -->
        <div class="mt-12 text-center">
            <h2 class="text-4xl font-bold text-gray-200">How It Works</h2>
            <div class="flex flex-wrap justify-center gap-10 mt-6">
                <div class="bg-gray-900 p-6 rounded-lg shadow-lg max-w-xs transform hover:scale-105 transition border border-gray-700">
                    <h3 class="text-xl font-semibold text-emerald-400">1. Report a Lost Item</h3>
                    <p class="text-gray-400 mt-2">Describe your lost item and submit a report.</p>
                </div>
                <div class="bg-gray-900 p-6 rounded-lg shadow-lg max-w-xs transform hover:scale-105 transition border border-gray-700">
                    <h3 class="text-xl font-semibold text-blue-400">2. Report a Found Item</h3>
                    <p class="text-gray-400 mt-2">Found something? Let others know by reporting it.</p>
                </div>
                <div class="bg-gray-900 p-6 rounded-lg shadow-lg max-w-xs transform hover:scale-105 transition border border-gray-700">
                    <h3 class="text-xl font-semibold text-yellow-400">3. Reclaim Your Item</h3>
                    <p class="text-gray-400 mt-2">Connect with the finder and get your item back.</p>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="mt-12 text-center">
            <h2 class="text-3xl font-bold text-gray-200">Have You Found or Lost Something?</h2>
            <div class="mt-4 flex justify-center gap-4">
                <a href="{{ route('lost-items.create') }}"
                    class="px-6 py-3 bg-yellow-600 text-white font-semibold rounded-lg shadow-md hover:bg-yellow-700 transition transform hover:scale-110">
                    Report Lost Item
                </a>
                <a href="{{ route('found-items.create') }}"
                    class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition transform hover:scale-110">
                    Report Found Item
                </a>
            </div>
        </div>
    </div>
@endsection