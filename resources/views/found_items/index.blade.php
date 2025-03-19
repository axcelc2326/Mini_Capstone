@extends('layout.layout')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Found Items</h1>

        <a href="{{ route('found-items.create') }}" 
            class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300"
            aria-label="Report a found item">
            Report Found Item
        </a>

        <div class="mt-6">
            @if ($foundItems->isEmpty())
                <p class="text-gray-500">No found items reported yet.</p>
            @else
                <ul class="space-y-4">
                    @foreach ($foundItems as $item)
                        <li class="p-4 bg-gray-100 rounded-lg shadow-sm flex items-center gap-4 hover:bg-gray-200 transition duration-200">
                            @if ($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" 
                                    alt="Found item: {{ $item->name }}" 
                                    class="w-24 h-24 object-cover rounded-lg shadow"
                                    loading="lazy">
                            @else
                                <div class="w-24 h-24 bg-gray-300 flex items-center justify-center rounded-lg">
                                    <span class="text-gray-500">No Image</span>
                                </div>
                            @endif

                            <div class="flex-1">
                                <h2 class="text-lg font-semibold text-gray-700">{{ $item->name }}</h2>
                                <p class="text-gray-600">📍 Location: {{ $item->location }}</p>
                                <p class="text-gray-500 text-sm">{{ $item->description }}</p>
                                <p class="text-gray-500 text-sm">Reported by: {{ $item->user->name ?? 'Unknown' }}</p>

                                <a href="{{ route('found-items.show', $item) }}" 
                                    class="text-blue-600 hover:underline text-sm">
                                    View Details →
                                </a>
                            </div>

                            <!-- Edit & Delete Buttons -->
                            <div class="flex gap-2">
                                <!-- Edit -->
                                <a href="{{ route('found-items.edit', $item) }}" 
                                    class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition">
                                    ✏️ Edit
                                </a>

                                <!-- Delete -->
                                <form action="{{ route('found-items.destroy', $item) }}" method="POST" 
                                    onsubmit="return confirm('Are you sure you want to delete this item?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                        class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition">
                                        🗑️ Delete
                                    </button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection
