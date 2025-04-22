@extends('layout.layout') {{-- Make sure this matches your layout file --}}

@section('title', 'About Us')

@section('content')
<div class="container mx-auto p-8 bg-gray-900 text-gray-200 rounded-lg shadow-lg">
    <h1 class="text-4xl font-extrabold mb-6 text-center text-blue-400">About Us</h1>

    <p class="mb-6 text-lg text-gray-300">
        Welcome to our Lost and Found platform — your go-to place for reporting and recovering lost items within our community.
    </p>

    <p class="mb-6 text-lg text-gray-300">
        This project was developed by <strong class="text-blue-300">John Axcel A. Cervantes</strong> as a mini capstone for the BSIT program at <strong class="text-blue-300">Mater Dei College</strong>.
    </p>

    <p class="mb-6 text-lg text-gray-300">
        Our mission is to provide an easy-to-use and secure system that connects people who have lost items with those who have found them. Whether it's a misplaced wallet, phone, or even a pet — we aim to help get it back to its rightful owner.
    </p>

    <p class="text-lg text-gray-300">
        Thank you for supporting our initiative. Together, we can make a difference — one found item at a time.
    </p>
</div>
@endsection
