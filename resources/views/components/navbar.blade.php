<script src="https://unpkg.com/lucide@latest"></script>

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
            <a href="{{ url('/') }}" 
                class="p-3 rounded-lg flex items-center gap-2 transition-all duration-300 
                {{ request()->routeIs('home') ? 'bg-gray-800 text-emerald-300' : 'hover:bg-gray-800 hover:text-emerald-300 hover:translate-x-1' }}">
                <i data-lucide="home" class="w-5 h-5"></i> <span>Home</span>
            </a>
            <a href="{{ route('items.index') }}" 
                class="p-3 rounded-lg flex items-center gap-2 transition-all duration-300 
                {{ request()->routeIs('items.index') ? 'bg-gray-800 text-emerald-300' : 'hover:bg-gray-800 hover:text-emerald-300 hover:translate-x-1' }}">
                <i data-lucide="package" class="w-5 h-5"></i> <span>Lost & Found Items</span>
            </a>
            
            <!-- Lost Items Dropdown -->
            <div>
                <button type="button" 
                    class="p-3 w-full text-left flex justify-between items-center rounded-lg transition-all duration-300 
                    {{ request()->routeIs('lost-items.*') ? 'bg-gray-800 text-yellow-400' : 'hover:bg-gray-800 hover:text-yellow-400' }}"
                    onclick="toggleDropdown('lostItemsDropdown', 'lostItemsArrow')">
                    <span class="flex items-center gap-2">
                        <i data-lucide="alert-triangle" class="w-5 h-5"></i> Lost Items
                    </span>
                    <span id="lostItemsArrow" class="transition-transform duration-300">▼</span>
                </button>
                <div id="lostItemsDropdown" class="hidden flex-col pl-4 mt-1 space-y-2 bg-gray-850 p-2 rounded-lg shadow-md border border-gray-700">
                    <a href="{{ route('lost-items.index') }}" 
                        class="p-2 flex items-center gap-2 rounded-md transition-all duration-300 
                        {{ request()->routeIs('lost-items.index') ? 'bg-gray-800 text-yellow-400' : 'hover:bg-gray-800 hover:text-yellow-400' }}">
                        <i data-lucide="list" class="w-5 h-5"></i> <span>All Lost Items</span>
                    </a>
                    <a href="{{ route('lost-items.create') }}" 
                        class="p-2 flex items-center gap-2 rounded-md transition-all duration-300 
                        {{ request()->routeIs('lost-items.create') ? 'bg-gray-800 text-yellow-400' : 'hover:bg-gray-800 hover:text-yellow-400' }}">
                        <i data-lucide="plus-circle" class="w-5 h-5"></i> <span>Report Lost Item</span>
                    </a>
                </div>
            </div>

            <!-- Found Items Dropdown -->
            <div>
                <button type="button" 
                    class="p-3 w-full text-left flex justify-between items-center rounded-lg transition-all duration-300 
                    {{ request()->routeIs('found-items.*') ? 'bg-gray-800 text-blue-400' : 'hover:bg-gray-800 hover:text-blue-400' }}"
                    onclick="toggleDropdown('foundItemsDropdown', 'foundItemsArrow')">
                    <span class="flex items-center gap-2">
                        <i data-lucide="search" class="w-5 h-5"></i> Found Items
                    </span>
                    <span id="foundItemsArrow" class="transition-transform duration-300 ease-in-out">▼</span>
                </button>
                <div id="foundItemsDropdown" class="hidden flex-col pl-4 mt-1 space-y-2 bg-gray-850 p-2 rounded-lg shadow-md border border-gray-700">
                    <a href="{{ route('found-items.index') }}" 
                        class="p-2 flex items-center gap-2 rounded-md transition-all duration-300 
                        {{ request()->routeIs('found-items.index') ? 'bg-gray-800 text-blue-400' : 'hover:bg-gray-800 hover:text-blue-400' }}">
                        <i data-lucide="list" class="w-5 h-5"></i> <span>All Found Items</span>
                    </a>
                    <a href="{{ route('found-items.create') }}" 
                        class="p-2 flex items-center gap-2 rounded-md transition-all duration-300 
                        {{ request()->routeIs('found-items.create') ? 'bg-gray-800 text-blue-400' : 'hover:bg-gray-800 hover:text-blue-400' }}">
                        <i data-lucide="plus-circle" class="w-5 h-5"></i> <span>Report Found Item</span>
                    </a>
                </div>
            </div>

            <a href="{{ route('about.us') }}" class="p-3 rounded-lg flex items-center gap-2 transition-all duration-300 
                {{ request()->routeIs('about.us') ? 'bg-gray-800 text-emerald-300' : 'hover:bg-gray-800 hover:text-emerald-300 hover:translate-x-1' }}">
                <i data-lucide="info" class="w-5 h-5"></i> <span>About Us</span>
            </a>

            <a href="{{ route('contacts') }}" class="p-3 rounded-lg flex items-center gap-2 transition-all duration-300 
                {{ request()->routeIs('contacts') ? 'bg-gray-800 text-emerald-300' : 'hover:bg-gray-800 hover:text-emerald-300 hover:translate-x-1' }}">
                <i data-lucide="phone" class="w-5 h-5"></i> <span>contacts</span>
            </a>

            <a href="{{ route('terms.services') }}" class="p-3 rounded-lg flex items-center gap-2 transition-all duration-300 
                {{ request()->routeIs('terms.services') ? 'bg-gray-800 text-emerald-300' : 'hover:bg-gray-800 hover:text-emerald-300 hover:translate-x-1' }}">
                <i data-lucide="file-text" class="w-5 h-5"></i> <span>Terms & Services</span>
            </a>
            
            @can('manage-users')
                <h2 class="text-sm text-gray-500 mt-4">Other's</h2>
                <a href="{{ route('users') }}" 
                    class="p-3 flex items-center gap-2 rounded-lg transition-all duration-300 
                    {{ request()->routeIs('users') ? 'bg-gray-800 text-emerald-300' : 'hover:bg-gray-800 hover:text-emerald-300 hover:translate-x-1' }}">
                    <i data-lucide="users" class="w-5 h-5"></i> <span>Users</span>
                </a>
            @endcan
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col min-h-screen">
        <nav class="bg-gray-900 flex justify-between items-center p-5 shadow-md border-b border-gray-800">
            <h1 class="text-xl font-semibold text-gray-300">Dashboard</h1>
            @if (auth()->check())
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="px-4 py-2 flex items-center gap-2 rounded-lg transition-all duration-300 bg-red-600 text-white shadow-md hover:bg-red-700 hover:scale-105">
                        <i data-lucide="log-out" class="w-5 h-5"></i> <span>Logout</span>
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" 
                    class="px-4 py-2 flex items-center gap-2 rounded-lg transition-all duration-300 bg-emerald-600 text-white shadow-md hover:bg-emerald-700 hover:scale-105">
                    <i data-lucide="log-in" class="w-5 h-5"></i> <span>Login</span>
                </a>
            @endif
        </nav>
        <main class="p-6 flex-1">
            @yield('content')
        </main>

        
        <footer class="bg-gray-900 text-gray-400 px-6 py-2 border-t border-gray-800 text-sm">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Branding / Info -->
                <div class="text-center md:text-left">
                    <h2 class="text-white text-lg font-semibold mb-2">
                        <span class="text-emerald-400 animate-pulse">L</span>
                        <span class="text-blue-400 animate-pulse">a</span>
                        <span class="text-yellow-400 animate-pulse">f</span>
                        <span class="text-red-400 animate-pulse">S</span>
                        <span class="text-purple-400 animate-pulse">e</span>
                        <span class="text-pink-400 animate-pulse">R</span>
                    </h2>
                    <p class="text-gray-400">
                        Lost and Found Service and Recovery.<br>
                        Reuniting people with their belongings.
                    </p>
                </div>

                <!-- Information Section -->
                <div class="text-center">
                    <h2 class="text-blue-400 text-lg font-semibold mb-2">Information</h2>
                    <div class="space-y-1 text-sm">
                        <a href="{{ route('about.us') }}" class="text-gray-300 hover:text-emerald-300 transition">
                            About Us 
                        </a>
                        <br>
                        <a href="{{ route('contacts') }}" class="text-gray-300 hover:text-emerald-300 transition">
                            Contact 
                        </a>
                        <br>
                        <a href="{{ route('terms.services') }}" class="text-gray-300 hover:text-emerald-300 transition">
                            Terms & Services
                        </a>
                    </div>
                </div>


                <!-- Copyright -->
                <div class="text-center md:text-right pt-8">
                    <p>&copy; {{ date('Y') }} LafSeR</p>
                    <p>All rights reserved.</p>
                </div>
            </div>
        </footer>


    </div>
</div>

<script>
    lucide.createIcons();

    
    function toggleDropdown(dropdownId, arrowId) {
        const dropdown = document.getElementById(dropdownId);
        const arrow = document.getElementById(arrowId);

        dropdown.classList.toggle('hidden');
        arrow.classList.toggle('rotate-180');
    }
</script>