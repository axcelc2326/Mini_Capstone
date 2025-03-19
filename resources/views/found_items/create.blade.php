@extends('layout.layout')

@section('content')
    <h1>Report Found Item</h1>
        <form method="POST" action="{{ route('found-items.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Item Name" required>
        <textarea name="description" placeholder="Description" required></textarea>
        <input type="text" name="location" placeholder="Found Location" required>
        <input type="file" name="image" accept="image/*">
        <button type="submit">Report Found Item</button>
    </form>

@endsection
