@extends('layout.layout')

@section('content')
    <div class="relative w-full min-h-screen flex flex-col justify-center items-center bg-gray-100">
        <!-- Hero Section -->
        <div class="text-center max-w-3xl p-5">
            <h1 class="text-5xl font-extrabold text-gray-800">
                Lost & Found Portal
            </h1>
            <p class="text-lg text-gray-600 mt-3">
                Report lost items, find missing belongings, and help reunite items with their rightful owners.
            </p>

            <div class="mt-6 flex justify-center gap-4">
                <a href="{{ route('lost-items.index') }}"
                    class="px-6 py-3 bg-yellow-500 text-white font-semibold rounded-md shadow-md hover:bg-yellow-600 transition">
                    View Lost Items
                </a>
                <a href="{{ route('found-items.index') }}"
                    class="px-6 py-3 bg-blue-500 text-white font-semibold rounded-md shadow-md hover:bg-blue-600 transition">
                    View Found Items
                </a>
            </div>
        </div>

        <!-- How It Works Section -->
        <div class="mt-12 text-center">
            <h2 class="text-3xl font-bold text-gray-700">How It Works</h2>
            <div class="flex flex-wrap justify-center gap-10 mt-6">
                <div class="bg-white p-6 rounded-lg shadow-md max-w-xs">
                    <h3 class="text-xl font-semibold text-gray-800">1. Report a Lost Item</h3>
                    <p class="text-gray-600 mt-2">Describe your lost item and submit a report.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md max-w-xs">
                    <h3 class="text-xl font-semibold text-gray-800">2. Report a Found Item</h3>
                    <p class="text-gray-600 mt-2">Found something? Let others know by reporting it.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md max-w-xs">
                    <h3 class="text-xl font-semibold text-gray-800">3. Reclaim Your Item</h3>
                    <p class="text-gray-600 mt-2">Connect with the finder and get your item back.</p>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="mt-12 text-center">
            <h2 class="text-2xl font-bold text-gray-800">Have You Found or Lost Something?</h2>
            <div class="mt-4 flex justify-center gap-4">
                <a href="{{ route('lost-items.create') }}"
                    class="px-6 py-3 bg-yellow-500 text-white font-semibold rounded-md shadow-md hover:bg-yellow-600 transition">
                    Report Lost Item
                </a>
                <a href="{{ route('found-items.create') }}"
                    class="px-6 py-3 bg-blue-500 text-white font-semibold rounded-md shadow-md hover:bg-blue-600 transition">
                    Report Found Item
                </a>
            </div>
        </div>
    </div>
@endsection
