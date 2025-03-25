@extends('layout.layout')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-gray-900 shadow-lg rounded-lg text-gray-300">
        <h1 class="text-2xl font-bold text-gray-100 mb-4">Lost Item Details</h1>

        <div class="bg-gray-800 p-4 rounded-lg shadow">
            @if ($lostItem->image)
                <img src="{{ asset('storage/' . $lostItem->image) }}" 
                    alt="Lost item: {{ $lostItem->name }}" 
                    class="w-48 h-48 object-cover rounded-lg shadow">
            @else
                <div class="w-48 h-48 bg-gray-700 flex items-center justify-center rounded-lg">
                    <span class="text-gray-500">No Image</span>
                </div>
            @endif

            <h2 class="text-xl font-semibold text-gray-200 mt-4">{{ $lostItem->name }}</h2>
            <p class="text-gray-400">📍 Location: {{ $lostItem->location }}</p>
            <p class="text-gray-500">{{ $lostItem->description }}</p>
            <p class="text-gray-500 text-sm">Reported by: {{ $lostItem->user->name ?? 'Unknown' }}</p>
        </div>

        <a href="{{ route('lost-items.index') }}" 
            class="mt-4 inline-block bg-red-600 text-gray-100 px-4 py-2 rounded-lg hover:bg-red-700 transition">
            🔙 Back to Lost Items
        </a>
    </div>
@endsection
