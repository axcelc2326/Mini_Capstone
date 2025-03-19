<div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="bg-gray-900 text-white w-64 h-screen p-5 space-y-6 shadow-md">
        <a href="{{ url('/') }}">
            <h1 class="text-3xl text-green-500 font-bold transition-transform duration-300 hover:scale-105">
                Sy<span class="text-white">[n]</span>ex
            </h1>
        </a>
        <nav class="flex flex-col space-y-4">
            <a class="p-2 rounded-md transition-all duration-300 transform hover:bg-gray-600 hover:scale-105 hover:text-green-400" href="{{ route('home') }}">
                Home
            </a>
            <a class="p-2 rounded-md transition-all duration-300 transform hover:bg-gray-600 hover:scale-105 hover:text-yellow-400" href="{{ route('lost-items.index') }}">
                Lost Items
            </a>
            <a class="p-2 rounded-md transition-all duration-300 transform hover:bg-gray-600 hover:scale-105 hover:text-blue-400" href="{{ route('found-items.index') }}">
                Found Items
            </a>
            @can('manage-users')
                <a class="p-2 rounded-md transition-all duration-300 transform hover:bg-gray-600 hover:scale-105 hover:text-green-400" href="{{ route('users') }}">
                    Users
                </a>
            @endcan
            
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Navbar -->
        <nav class="bg-gray-800 flex justify-between items-center p-5 text-white shadow-md">
            <h1 class="text-xl font-semibold">Dashboard</h1>
            @if (auth()->check())
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full text-left p-2 rounded-md transition-all duration-300 transform hover:bg-gray-600 hover:scale-105 hover:text-red-600">
                        Logout
                    </button>
                </form>
            @else
                <a class="p-2 rounded-md transition-all duration-300 transform hover:bg-gray-600 hover:scale-105 hover:text-green-400" href="{{ route('login') }}">
                    Login
                </a>
            @endif
        </nav>

        <!-- Page Content -->
        <main class="p-6 flex-1">
            @yield('content')
        </main>
    </div>
</div>