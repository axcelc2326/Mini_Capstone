@extends('layout.layout')

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gradient-to-br from-gray-100 to-gray-200">
        <div class="bg-white shadow-2xl rounded-2xl p-10 w-full max-w-lg border border-gray-200">
            <h1 class="text-3xl font-extrabold text-gray-800 mb-6 text-center">Report Lost Item</h1>

            <form method="POST" action="{{ route('lost-items.store') }}" enctype="multipart/form-data" class="space-y-5">
                @csrf

                <!-- Item Name -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Item Name</label>
                    <input type="text" name="name" required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-yellow-400 bg-gray-50 shadow-sm">
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Description</label>
                    <textarea name="description" required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-yellow-400 bg-gray-50 shadow-sm"></textarea>
                </div>

                <!-- Last Seen Location -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Last Seen Location</label>
                    <input type="text" name="location" required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-yellow-400 bg-gray-50 shadow-sm">
                </div>

                <!-- Image Upload -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Upload Image</label>
                    <input type="file" name="image" accept="image/*" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-yellow-400 bg-gray-50 shadow-sm">
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                    class="w-full bg-yellow-400 text-white py-3 px-4 rounded-lg hover:bg-yellow-500 transition shadow-lg font-semibold">
                    Report Lost Item
                </button>
            </form>
        </div>
    </div>
@endsection
