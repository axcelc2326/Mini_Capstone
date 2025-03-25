@extends('layout.layout')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-gray-900 shadow-lg rounded-lg text-gray-300">
        <h1 class="text-2xl font-bold text-gray-100 mb-4">Lost Items</h1>
        
        <div class="mt-6">
            @if ($lostItems->isEmpty())
                <p class="text-gray-500">No lost items reported yet.</p>
            @else
                <ul class="space-y-4">
                    @foreach ($lostItems as $item)
                        <li class="p-4 bg-gray-800 rounded-lg shadow-sm flex items-center gap-4 hover:bg-gray-700 transition duration-200">
                            @if ($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" 
                                    alt="Lost item: {{ $item->name }}" 
                                    class="w-24 h-24 object-cover rounded-lg shadow"
                                    loading="lazy">
                            @else
                                <div class="w-24 h-24 bg-gray-700 flex items-center justify-center rounded-lg">
                                    <span class="text-gray-500">No Image</span>
                                </div>
                            @endif

                            <div class="flex-1">
                                <h2 class="text-lg font-semibold text-gray-200">{{ $item->name }}</h2>
                                <p class="text-gray-400">📍 Location: {{ $item->location }}</p>
                                <p class="text-gray-500 text-sm">{{ $item->description }}</p>
                                <p class="text-gray-500 text-sm">Reported by: {{ $item->user->name ?? 'Unknown' }}</p>

                                <a href="{{ route('lost-items.show', $item) }}" 
                                    class="text-yellow-500 hover:underline text-sm">
                                    View Details →
                                </a>
                            </div>

                            <!-- Edit & Delete Buttons (Only for users with 'manage-items' permission) -->
                            @can('manage-items')
                                <div class="flex gap-2">
                                    <!-- Edit -->
                                    <a href="{{ route('lost-items.edit', $item) }}" 
                                        class="bg-yellow-500 text-gray-900 px-3 py-1 rounded hover:bg-yellow-600 transition">
                                        ✏️ Edit
                                    </a>

                                    <!-- Delete -->
                                    <form action="{{ route('lost-items.destroy', $item) }}" method="POST" 
                                        onsubmit="return confirm('Are you sure you want to delete this item?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                            class="bg-red-600 text-gray-100 px-3 py-1 rounded hover:bg-red-700 transition">
                                            🗑️ Delete
                                        </button>
                                    </form>
                                </div>
                            @endcan
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection