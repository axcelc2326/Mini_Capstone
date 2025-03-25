<div class="flex min-h-screen bg-gray-950 text-gray-300">
    <!-- Sidebar -->
    <aside class="bg-gray-900 w-72 p-6 shadow-lg flex flex-col min-h-screen border-r border-gray-800">
        <a href="{{ url('/') }}" class="mb-6 text-center">
            <h1 class="text-4xl font-extrabold tracking-wide transition-transform duration-300 hover:scale-110">
                <span class="text-emerald-400 animate-pulse">L</span>
                <span class="text-blue-400 animate-pulse">a</span>
                <span class="text-yellow-400 animate-pulse">f</span>
                <span class="text-red-400 animate-pulse">S</span>
                <span class="text-purple-400 animate-pulse">e</span>
                <span class="text-pink-400 animate-pulse">R</span>
            </h1>
        </a>
        <nav class="flex flex-col space-y-4 flex-1">
            <a href="{{ route('home') }}" 
                class="p-3 rounded-lg flex items-center gap-2 transition-all duration-300 
                {{ request()->routeIs('home') ? 'bg-gray-800 text-emerald-300' : 'hover:bg-gray-800 hover:text-emerald-300 hover:translate-x-1' }}">
                Home
            </a>
            <a href="{{ route('items.index') }}" 
                class="p-3 rounded-lg flex items-center gap-2 transition-all duration-300 
                {{ request()->routeIs('items.index') ? 'bg-gray-800 text-emerald-300' : 'hover:bg-gray-800 hover:text-emerald-300 hover:translate-x-1' }}">
                Lost & Found Items
            </a>
            
            <!-- Lost Items Dropdown -->
            <div class="group relative">
                <button class="p-3 w-full text-left flex justify-between items-center rounded-lg transition-all duration-300 
                    {{ request()->routeIs('lost-items.*') ? 'bg-gray-800 text-yellow-400' : 'hover:bg-gray-800 hover:text-yellow-400' }}">
                    Lost Items
                    <span class="transition-transform duration-300 group-hover:rotate-180">▼</span>
                </button>
                <div class="hidden group-hover:flex flex-col pl-4 mt-1 space-y-2 bg-gray-850 p-2 rounded-lg shadow-md border border-gray-700">
                    <a href="{{ route('lost-items.index') }}" 
                        class="p-2 rounded-md transition-all duration-300 
                        {{ request()->routeIs('lost-items.index') ? 'bg-gray-800 text-yellow-400' : 'hover:bg-gray-800 hover:text-yellow-400' }}">
                        All Lost Items
                    </a>
                    <a href="{{ route('lost-items.create') }}" 
                        class="p-2 rounded-md transition-all duration-300 
                        {{ request()->routeIs('lost-items.create') ? 'bg-gray-800 text-yellow-400' : 'hover:bg-gray-800 hover:text-yellow-400' }}">
                        Report Lost Item
                    </a>
                </div>
            </div>
            
            <!-- Found Items Dropdown -->
            <div class="group relative">
                <button class="p-3 w-full text-left flex justify-between items-center rounded-lg transition-all duration-300 
                    {{ request()->routeIs('found-items.*') ? 'bg-gray-800 text-blue-400' : 'hover:bg-gray-800 hover:text-blue-400' }}">
                    Found Items
                    <span class="transition-transform duration-300 group-hover:rotate-180">▼</span>
                </button>
                <div class="hidden group-hover:flex flex-col pl-4 mt-1 space-y-2 bg-gray-850 p-2 rounded-lg shadow-md border border-gray-700">
                    <a href="{{ route('found-items.index') }}" 
                        class="p-2 rounded-md transition-all duration-300 
                        {{ request()->routeIs('found-items.index') ? 'bg-gray-800 text-blue-400' : 'hover:bg-gray-800 hover:text-blue-400' }}">
                        All Found Items
                    </a>
                    <a href="{{ route('found-items.create') }}" 
                        class="p-2 rounded-md transition-all duration-300 
                        {{ request()->routeIs('found-items.create') ? 'bg-gray-800 text-blue-400' : 'hover:bg-gray-800 hover:text-blue-400' }}">
                        Report Found Item
                    </a>
                </div>
            </div>
            
            @can('manage-users')
                <h2 class="text-sm text-gray-500 mt-4">Other's</h2>
                <a href="{{ route('users') }}" 
                    class="p-3 rounded-lg flex items-center gap-2 transition-all duration-300 
                    {{ request()->routeIs('users') ? 'bg-gray-800 text-emerald-300' : 'hover:bg-gray-800 hover:text-emerald-300 hover:translate-x-1' }}">
                    Users
                </a>
            @endcan
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col min-h-screen">
        <!-- Navbar -->
        <nav class="bg-gray-900 flex justify-between items-center p-5 shadow-md border-b border-gray-800">
            <h1 class="text-xl font-semibold text-gray-300">Dashboard</h1>
            @if (auth()->check())
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="px-4 py-2 rounded-lg transition-all duration-300 bg-red-600 text-white shadow-md hover:bg-red-700 hover:scale-105">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" 
                    class="px-4 py-2 rounded-lg transition-all duration-300 bg-emerald-600 text-white shadow-md hover:bg-emerald-700 hover:scale-105">
                    Login
                </a>
            @endif
        </nav>

        <!-- Page Content -->
        <main class="p-6 flex-1">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 text-gray-500 text-center p-4 border-t border-gray-800">
            <p>&copy; {{ date('Y') }} LafSeR. All rights reserved.</p>
        </footer>
    </div>
</div>