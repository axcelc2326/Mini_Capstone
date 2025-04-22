@extends('layout.layout')

@section('content')
    <div class="flex flex-col justify-start items-center pt-20 min-h-screen bg-transparent">
        
                {{-- ✅ Success Alert (Account Created) --}}
                @if (session('success'))
                    <div class="w-full max-w-md mx-auto bg-transparent font-bold bg-gradient-to-r from-blue-400 to-purple-500 text-transparent bg-clip-text text-center p-3 rounded-lg shadow-lg animate-fade-in">
                        {{ session('success') }}
                    </div>

                    {{-- JavaScript to Auto-Close the Alert After 3 Seconds --}}
                    <script>
                        setTimeout(function() {
                            document.querySelector('.animate-fade-in').style.display = 'none';
                        }, 3000);
                    </script>
                @endif

        <form class="flex flex-col bg-gray-800 p-6 rounded-lg shadow-lg w-full max-w-md mx-auto space-y-4 animate-fade-in"
            action="{{ route('signin') }}" method="POST">
            @csrf

            <h2 class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-purple-500 text-transparent bg-clip-text text-center animate-bounce">
                Log in
            </h2>

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

            <button type="submit"
                class="w-full bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600 text-white font-medium py-2 rounded-lg transition duration-300 active:scale-95">
                Log in
            </button>

            <p class="text-center text-gray-300 mt-4">
                Don't have an account? <a href="{{ route('register') }}" class="text-blue-400 hover:underline">Sign up</a>
            </p>

            @if (session('error'))
                <div class="mt-4 text-center text-red-400 bg-gray-800 rounded-md animate-fade-in font-semibold">
                    {{ session('error') }}
                </div>
            @endif
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
