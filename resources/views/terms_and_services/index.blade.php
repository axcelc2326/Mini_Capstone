@extends('layout.layout')

@section('content')
<div class="container mx-auto p-8 bg-gray-900 text-gray-200 rounded-lg shadow-lg">
    <h1 class="text-4xl font-extrabold mb-6 text-center text-blue-400">Terms and Services</h1>
    
    <p class="mb-6 text-lg text-gray-300">Welcome to our Lost and Found System. By using our platform, you agree to the following terms and conditions:</p>
    
    <div class="space-y-6">
        <div>
            <h2 class="text-2xl font-semibold text-blue-300">1. User Responsibilities</h2>
            <p class="text-gray-400">Users must provide accurate information when reporting lost or found items. False claims may result in account suspension.</p>
        </div>

        <div>
            <h2 class="text-2xl font-semibold text-blue-300">2. System Limitations</h2>
            <p class="text-gray-400">Our system acts as an intermediary for lost and found items. We do not guarantee the recovery of lost items or the legitimacy of found item claims.</p>
        </div>

        <div>
            <h2 class="text-2xl font-semibold text-blue-300">3. Item Handling</h2>
            <p class="text-gray-400">Users who report found items should take reasonable steps to return them to their rightful owners. Items must not be kept unlawfully.</p>
        </div>

        <div>
            <h2 class="text-2xl font-semibold text-blue-300">4. Privacy Policy</h2>
            <p class="text-gray-400">We collect and store user data for system functionality but do not share personal information with third parties.</p>
        </div>

        <div>
            <h2 class="text-2xl font-semibold text-blue-300">5. Liability Disclaimer</h2>
            <p class="text-gray-400">The platform is not responsible for any disputes or damages arising from lost or found item claims.</p>
        </div>
    </div>
    
    <p class="mt-8 text-center text-lg text-gray-300">By using our system, you agree to these terms. If you do not agree, please refrain from using the service.</p>
</div>
@endsection