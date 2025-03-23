@extends('layout.layout')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Lost & Found Items</h1>

        <div class="mt-6">
            @if ($items->isEmpty())
                <p class="text-gray-500">No items reported yet.</p>
            @else
                <ul class="space-y-4">
                    @foreach ($items as $item)
                        <li class="p-4 bg-gray-100 rounded-lg shadow-sm flex items-center gap-4 hover:bg-gray-200 transition duration-200">
                            @if ($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" 
                                    alt="{{ ucfirst($item->type) }} item: {{ $item->name }}" 
                                    class="w-24 h-24 object-cover rounded-lg shadow"
                                    loading="lazy">
                            @else
                                <div class="w-24 h-24 bg-gray-300 flex items-center justify-center rounded-lg">
                                    <span class="text-gray-500">No Image</span>
                                </div>
                            @endif

                            <div class="flex-1">
                                <h2 class="text-lg font-semibold 
                                        {{ $item->type === 'lost' ? 'text-red-600' : 'text-blue-600' }}">
                                        {{ ucfirst($item->type) }} Item
                                </h2>
                                <h2 class="text-lg font-semibold text-gray-700">{{ $item->name }}</h2>
                                <p class="text-gray-600">📍 Location: {{ $item->location }}</p>
                                <p class="text-gray-500 text-sm">{{ $item->description }}</p>
                                <p class="text-gray-500 text-sm">Reported by: {{ $item->user->name ?? 'Unknown' }}</p>

                                <a href="{{ $item->type === 'lost' ? route('lost-items.show', $item) : route('found-items.show', $item) }}" 
                                    class="text-blue-600 hover:underline text-sm">
                                    View Details →
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection