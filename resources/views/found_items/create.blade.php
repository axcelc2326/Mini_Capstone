@extends('layout.layout')

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-transparent">
        <div class="bg-gray-900 shadow-2xl rounded-2xl p-10 w-full max-w-lg border border-gray-700 text-gray-300">
            <h1 class="text-3xl font-extrabold text-gray-100 mb-6 text-center">Report Found Item</h1>

            <form method="POST" action="{{ route('found-items.store') }}" enctype="multipart/form-data" class="space-y-5">
                @csrf

                <!-- Item Name -->
                <div>
                    <label class="block text-gray-400 font-semibold mb-1">Item Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" required 
                        class="w-full px-4 py-3 border border-gray-700 rounded-lg focus:ring focus:ring-blue-500 bg-gray-800 shadow-sm text-gray-100">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-gray-400 font-semibold mb-1">Description</label>
                    <textarea name="description" required 
                        class="w-full px-4 py-3 border border-gray-700 rounded-lg focus:ring focus:ring-blue-500 bg-gray-800 shadow-sm text-gray-100">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Found Location -->
                <div>
                    <label class="block text-gray-400 font-semibold mb-1">Found Location</label>
                    <input type="text" name="location" value="{{ old('location') }}" required 
                        class="w-full px-4 py-3 border border-gray-700 rounded-lg focus:ring focus:ring-blue-500 bg-gray-800 shadow-sm text-gray-100">
                    @error('location')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Image Upload -->
                <div>
                    <label class="block text-gray-400 font-semibold mb-1">Upload Image</label>
                    <input type="file" name="image" accept="image/*" 
                        class="w-full px-4 py-3 border border-gray-700 rounded-lg focus:ring focus:ring-blue-500 bg-gray-800 shadow-sm text-gray-100">
                    @error('image')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                    class="w-full bg-blue-500 text-gray-900 py-3 px-4 rounded-lg hover:bg-blue-600 transition shadow-lg font-semibold">
                    Report Found Item
                </button>
            </form>
        </div>
    </div>
@endsection