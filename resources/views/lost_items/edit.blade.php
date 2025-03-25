@extends('layout.layout')

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-transparent">
        <div class="bg-gray-900 shadow-2xl rounded-2xl p-10 w-full max-w-lg border border-gray-700 text-gray-300">
            <h1 class="text-3xl font-extrabold text-gray-100 mb-6 text-center">Edit Lost Item</h1>

            <form method="POST" action="{{ route('lost-items.update', $lostItem->id) }}" enctype="multipart/form-data" class="space-y-5">
                @csrf
                @method('PUT')

                <!-- Item Name -->
                <div>
                    <label class="block text-gray-400 font-semibold mb-1">Item Name</label>
                    <input type="text" name="name" value="{{ old('name', $lostItem->name) }}" required 
                        class="w-full px-4 py-3 border border-gray-700 rounded-lg focus:ring focus:ring-yellow-500 bg-gray-800 shadow-sm text-gray-100">
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-gray-400 font-semibold mb-1">Description</label>
                    <textarea name="description" required 
                        class="w-full px-4 py-3 border border-gray-700 rounded-lg focus:ring focus:ring-yellow-500 bg-gray-800 shadow-sm text-gray-100">{{ old('description', $lostItem->description) }}</textarea>
                </div>

                <!-- Lost Location -->
                <div>
                    <label class="block text-gray-400 font-semibold mb-1">Lost Location</label>
                    <input type="text" name="location" value="{{ old('location', $lostItem->location) }}" required 
                        class="w-full px-4 py-3 border border-gray-700 rounded-lg focus:ring focus:ring-yellow-500 bg-gray-800 shadow-sm text-gray-100">
                </div>

                <!-- Current Image -->
                <div>
                    <label class="block text-gray-400 font-semibold mb-1">Current Image:</label>
                    @if ($lostItem->image)
                        <img src="{{ asset('storage/' . $lostItem->image) }}" alt="Current Image" class="w-full max-w-xs rounded-lg shadow-md">
                    @else
                        <p class="text-gray-500 italic">No image available</p>
                    @endif
                </div>

                <!-- Upload New Image -->
                <div>
                    <label class="block text-gray-400 font-semibold mb-1">Upload New Image</label>
                    <input type="file" name="image" 
                        class="w-full px-4 py-3 border border-gray-700 rounded-lg focus:ring focus:ring-yellow-500 bg-gray-800 shadow-sm text-gray-100">
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                    class="w-full bg-yellow-600 text-gray-900 py-3 px-4 rounded-lg hover:bg-yellow-700 transition shadow-lg font-semibold">
                    Update Item
                </button>
            </form>
        </div>
    </div>
@endsection