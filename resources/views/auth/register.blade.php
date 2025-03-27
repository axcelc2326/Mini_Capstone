@extends('layout.layout')

@section('content')
    <div class="flex flex-col justify-start items-center pt-20 min-h-screen bg-transparent">
        <form class="flex flex-col bg-gray-800 p-6 rounded-lg shadow-lg w-full max-w-md  mx-auto space-y-4 animate-fade-in"
            action="{{ route('register') }}" method="POST">
            @csrf   

            <h2 class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-purple-500 text-transparent bg-clip-text text-center animate-bounce">
                Create Account
            </h2>

            <div>
                <label for="name" class="block text-sm font-medium bg-gradient-to-r from-blue-400 to-purple-500 text-transparent bg-clip-text animate-pulse text-gray-300">Name</label>
                <input type="text" id="name" name="name" required
                    class="mt-1 w-full p-2 border border-gray-600 text-black rounded-lg focus:ring-blue-500 focus:border-blue-500 outline-none transition-all duration-300 hover:scale-105">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium bg-gradient-to-r from-blue-400 to-purple-500 text-transparent bg-clip-text animate-pulse text-gray-300">Email</label>
                <input type="email" id="email" name="email" required
                    class="mt-1 w-full p-2 border border-gray-600 text-black rounded-lg focus:ring-blue-500 focus:border-blue-500 outline-none transition-all duration-300 hover:scale-105">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium bg-gradient-to-r from-blue-400 to-purple-500 text-transparent bg-clip-text animate-pulse text-gray-300">Password</label>
                <input type="password" id="password" name="password" required
                    class="mt-1 w-full p-2 border border-gray-600 text-black rounded-lg focus:ring-blue-500 focus:border-blue-500 outline-none transition-all duration-300 hover:scale-105">
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium bg-gradient-to-r from-blue-400 to-purple-500 text-transparent bg-clip-text animate-pulse text-gray-300">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                    class="mt-1 w-full p-2 border border-gray-600 text-black rounded-lg focus:ring-blue-500 focus:border-blue-500 outline-none transition-all duration-300 hover:scale-105">
            </div>

            <button type="submit"
                class="w-full bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600 text-white font-medium py-2 rounded-lg transition duration-300 active:scale-95">
                Register
            </button>

            <p class="text-center text-gray-300 mt-4">
                Already have an account? <a href="{{ route('login') }}" class="text-blue-400 hover:underline">Log In</a>
            </p>
        </form>
    </div>

    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 0.5s ease-out;
        }
    </style>
@endsection
