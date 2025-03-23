<div class="flex min-h-screen bg-gray-50">
    <!-- Sidebar -->
    <aside class="bg-gradient-to-b from-slate-900 to-slate-800 text-gray-200 w-72 p-6 shadow-xl flex flex-col min-h-screen">
        <a href="{{ url('/') }}" class="mb-6 text-center">
            <h1 class="text-3xl font-extrabold tracking-wide transition-transform duration-300 hover:scale-105">
                <span class="text-emerald-400 animate-pulse">L</span>
                <span class="text-blue-400 animate-bounce">a</span>
                <span class="text-yellow-400 animate-pulse">f</span>
                <span class="text-red-400 animate-bounce">S</span>
                <span class="text-purple-400 animate-pulse">e</span>
                <span class="text-pink-400 animate-bounce">R</span>
            </h1>
        </a>
        <nav class="flex flex-col space-y-4 flex-1">
            <a href="{{ route('home') }}" 
               class="p-3 rounded-lg transition-all duration-300 flex items-center gap-2 
               {{ request()->routeIs('home') ? 'bg-slate-700 text-emerald-300' : 'hover:bg-slate-700 hover:text-emerald-300 hover:translate-x-1' }}">
                Home
            </a>
            <a href="{{ route('items.index') }}" 
               class="p-3 rounded-lg transition-all duration-300 flex items-center gap-2 
               {{ request()->routeIs('items.index') ? 'bg-slate-700 text-emerald-300' : 'hover:bg-slate-700 hover:text-emerald-300 hover:translate-x-1' }}">
                Lost & Found Items
            </a>
            
            <!-- Lost Items Dropdown -->
            <div class="group relative">
                <button class="p-3 w-full text-left flex justify-between items-center rounded-lg transition-all duration-300 
                    {{ request()->routeIs('lost-items.*') ? 'bg-slate-700 text-yellow-400' : 'hover:bg-slate-700 hover:text-yellow-400' }}">
                    Lost Items
                    <span class="transition-transform duration-300 group-hover:rotate-180">&#9662;</span>
                </button>
                <div class="hidden group-hover:flex flex-col pl-4 mt-1 space-y-2 bg-slate-800 p-2 rounded-lg shadow-md">
                    <a href="{{ route('lost-items.index') }}" 
                       class="p-2 rounded-md transition-all duration-300 
                       {{ request()->routeIs('lost-items.index') ? 'bg-slate-700 text-yellow-400' : 'hover:bg-slate-700 hover:text-yellow-400' }}">
                        All Lost Items
                    </a>
                    <a href="{{ route('lost-items.create') }}" 
                       class="p-2 rounded-md transition-all duration-300 
                       {{ request()->routeIs('lost-items.create') ? 'bg-slate-700 text-yellow-400' : 'hover:bg-slate-700 hover:text-yellow-400' }}">
                        Report Lost Item
                    </a>
                </div>
            </div>
            
            <!-- Found Items Dropdown -->
            <div class="group relative">
                <button class="p-3 w-full text-left flex justify-between items-center rounded-lg transition-all duration-300 
                    {{ request()->routeIs('found-items.*') ? 'bg-slate-700 text-blue-400' : 'hover:bg-slate-700 hover:text-blue-400' }}">
                    Found Items
                    <span class="transition-transform duration-300 group-hover:rotate-180">&#9662;</span>
                </button>
                <div class="hidden group-hover:flex flex-col pl-4 mt-1 space-y-2 bg-slate-800 p-2 rounded-lg shadow-md">
                    <a href="{{ route('found-items.index') }}" 
                       class="p-2 rounded-md transition-all duration-300 
                       {{ request()->routeIs('found-items.index') ? 'bg-slate-700 text-blue-400' : 'hover:bg-slate-700 hover:text-blue-400' }}">
                        All Found Items
                    </a>
                    <a href="{{ route('found-items.create') }}" 
                       class="p-2 rounded-md transition-all duration-300 
                       {{ request()->routeIs('found-items.create') ? 'bg-slate-700 text-blue-400' : 'hover:bg-slate-700 hover:text-blue-400' }}">
                        Report Found Item
                    </a>
                </div>
            </div>
            
            @can('manage-users')
                <h2 class="text-sm text-gray-400 mt-4 uppercase">Manage</h2>
                <a href="{{ route('users') }}" 
                   class="p-3 rounded-lg transition-all duration-300 flex items-center gap-2 
                   {{ request()->routeIs('users') ? 'bg-slate-700 text-emerald-300' : 'hover:bg-slate-700 hover:text-emerald-300 hover:translate-x-1' }}">
                    Users
                </a>
            @endcan
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col min-h-screen">
        <!-- Navbar -->
        <nav class="bg-white flex justify-between items-center p-5 shadow-md border-b">
            <h1 class="text-xl font-semibold text-gray-800">Dashboard</h1>
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
        <footer class="bg-gray-900 text-gray-400 text-center p-4">
            <p>&copy; {{ date('Y') }} LafSeR. All rights reserved.</p>
        </footer>
    </div>
</div>
