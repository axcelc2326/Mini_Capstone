@extends('layout.layout')

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-transparent">
        <div class="bg-gray-900 shadow-2xl rounded-2xl p-10 w-full max-w-lg border border-gray-700 text-gray-300">
            <h1 class="text-3xl font-extrabold bg-gradient-to-r from-blue-400 to-purple-500 text-transparent bg-clip-text text-center animate-bounce">Report Lost Item</h1>

            <form method="POST" action="{{ route('lost-items.store') }}" enctype="multipart/form-data" class="space-y-5">
                @csrf

                <!-- Item Name -->
                <div>
                    <label class="block font-semibold bg-gradient-to-r from-blue-400 to-purple-500 text-transparent bg-clip-text animate-pulse text-gray-300">Item Name</label>
                    <input type="text" name="name" required 
                        class="w-full px-4 py-3 border border-gray-700 rounded-lg focus:ring focus:ring-yellow-500 bg-gray-800 shadow-sm text-gray-100">
                </div>

                <!-- Description -->
                <div>
                    <label class="block font-semibold bg-gradient-to-r from-blue-400 to-purple-500 text-transparent bg-clip-text animate-pulse text-gray-300">Description</label>
                    <textarea name="description" required 
                        class="w-full px-4 py-3 border border-gray-700 rounded-lg focus:ring focus:ring-yellow-500 bg-gray-800 shadow-sm text-gray-100"></textarea>
                </div>

                <!-- Last Seen Location -->
                <div>
                    <label class="block font-semibold bg-gradient-to-r from-blue-400 to-purple-500 text-transparent bg-clip-text animate-pulse text-gray-300">Last Seen Location</label>
                    <input type="text" name="location" required 
                        class="w-full px-4 py-3 border border-gray-700 rounded-lg focus:ring focus:ring-yellow-500 bg-gray-800 shadow-sm text-gray-100">
                </div>

                <!-- Image Upload -->
                <div>
                    <label class="block font-semibold bg-gradient-to-r from-blue-400 to-purple-500 text-transparent bg-clip-text animate-pulse text-gray-300">Upload Image</label>
                    <input type="file" name="image" accept="image/*" 
                        class="w-full px-4 py-3 border border-gray-700 rounded-lg focus:ring focus:ring-yellow-500 bg-gray-800 shadow-sm text-gray-100">
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                    class="w-full bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600 text-white font-medium py-2 rounded-lg transition duration-300 active:scale-95">
                    Report Lost Item
                </button>
            </form>
        </div>
    </div>
@endsection