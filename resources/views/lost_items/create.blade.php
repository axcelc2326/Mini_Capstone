@extends('layout.layout')

@section('content')
    <h1>Report Lost Item</h1>

    <form method="POST" action="{{ route('lost-items.store') }}" enctype="multipart/form-data">
        @csrf

        <!-- Item Name -->
        <div>
            <label>Item Name</label>
            <input type="text" name="name" required>
        </div>

        <!-- Description -->
        <div>
            <label>Description</label>
            <textarea name="description" required></textarea>
        </div>

        <!-- Last Seen Location -->
        <div>
            <label>Last Seen Location</label>
            <input type="text" name="location" required>
        </div>

        <!-- Image Upload -->
        <div>
            <label>Upload Image</label>
            <input type="file" name="image" accept="image/*">
        </div>

        <!-- Submit Button -->
        <button type="submit">Report Lost Item</button>
    </form>
@endsection
