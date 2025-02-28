<nav class="bg-blue-600 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}" class="text-2xl font-bold">Task Manager</a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden md:flex space-x-6">
                <a href="{{ route('dashboard') }}" class="hover:text-gray-300">Dashboard</a>
                <a href="{{ route('tasks.index') }}" class="hover:text-gray-300">Tasks</a>
            </div>

            <!-- User Dropdown -->
            <div class="relative hidden md:block">
                <button id="user-menu" class="flex items-center space-x-2 focus:outline-none">
                    <span>{{ Auth::user()->name }}</span>
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                
                <div id="dropdown" class="absolute right-0 mt-2 w-48 bg-white text-gray-800 shadow-lg rounded-lg hidden">
                    <a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block px-4 py-2 w-full text-left hover:bg-gray-100">Log Out</button>
                    </form>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <button id="menu-btn" class="md:hidden focus:outline-none">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-3 space-y-1 bg-blue-700">
        <a href="{{ route('dashboard') }}" class="block py-2">Dashboard</a>
        <a href="{{ route('tasks.index') }}" class="block py-2">Tasks</a>
        <a href="{{ route('profile.edit') }}" class="block py-2">Profile</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="block w-full text-left py-2">Log Out</button>
        </form>
    </div>
</nav>

<script>
    document.getElementById('menu-btn').addEventListener('click', () => {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
    
    document.getElementById('user-menu').addEventListener('click', () => {
        document.getElementById('dropdown').classList.toggle('hidden');
    });
</script>
