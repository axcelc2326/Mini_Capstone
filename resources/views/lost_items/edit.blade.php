@extends('layout.layout')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Edit Lost Item</h1>

        <form method="POST" action="{{ route('lost-items.update', $lostItem->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <label>Item Name</label>
                <input type="text" name="name" value="{{ old('name', $lostItem->name) }}" required>
            </div>

            <div>
                <label>Description</label>
                <textarea name="description" required>{{ old('description', $lostItem->description) }}</textarea>
            </div>

            <div>
                <label>Location</label>
                <input type="text" name="location" value="{{ old('location', $lostItem->location) }}" required>
            </div>

            <div>
                <label>Current Image:</label>
                @if ($lostItem->image)
                    <img src="{{ asset('storage/' . $lostItem->image) }}" alt="Current Image" width="100">
                @else
                    <p>No image available</p>
                @endif
            </div>

            <div>
                <label>Upload New Image</label>
                <input type="file" name="image">
            </div>

            <button type="submit">Update Item</button>
        </form>
    </div>
@endsection
