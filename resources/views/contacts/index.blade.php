@extends('layout.layout')

@section('title', 'Lost and Found')

@section('content')
<div class="container mx-auto p-8 bg-gray-900 text-gray-200 rounded-lg shadow-lg">
    <h1 class="text-4xl font-extrabold mb-6 text-center text-blue-400">Lost and Found - [School Name]</h1>

    <p class="mb-6 text-lg text-gray-300">
        Welcome to the Lost and Found page of <strong class="text-blue-300">Mater Dei College</strong>. If you have misplaced an item or found something that might belong to someone else, this is the right place to start.
    </p>

    <h2 class="mt-6 text-2xl font-semibold text-blue-300">How to Report a Lost Item:</h2>
    <ul class="list-disc pl-6 mt-2 text-gray-300">
        <li>Visit the Lost and Found Area located at <strong>SSG Office</strong>.</li>
        <li>Provide a detailed description of the item, including any distinguishing marks or features.</li>
        <li>If you can't find your item right away, check back periodically as new items are added daily.</li>
    </ul>

    <h2 class="mt-6 text-2xl font-semibold text-blue-300">Found Something?</h2>
    <p class="mt-2 text-gray-300">
        If you’ve found an item, please drop it off at <strong>SSG Office</strong>. This will help ensure the rightful owner can retrieve it as soon as possible.
    </p>

    <h2 class="mt-6 text-2xl font-semibold text-blue-300">Unclaimed Items:</h2>
    <p class="mt-2 text-gray-300">
        Unclaimed items will be held for a period of <strong>7 days</strong> days. After that time, any remaining items will be donated to charity or disposed of according to school policy.
    </p>

    <p class="mt-6 text-lg text-gray-300">
        If you have any questions or need further assistance, please contact us at <strong>chivazaxcel@gmail.com</strong>.
    </p>
</div>
@endsection
