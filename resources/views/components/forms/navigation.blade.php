@vite('resources/css/app/css')

<nav class="bg-gray-900 shadow-md">
    <div class="container mx-auto flex justify-between items-center px-6 py-4 max-w-7xl text-gray-100">
        <!-- Logo Section -->
        <a href="{{ route('auth.home') }}" class="text-2xl font-extrabold text-orange-500 hover:text-teal-400 transition">
            MyApp
        </a>

        <!-- Navigation Links (hidden on small screens) -->
        <ul class="hidden md:flex items-center space-x-8 font-medium">
            <li>
                <a href="{{ route('auth.home') }}" 
                    class="hover:text-orange-400 transition duration-200">Home</a>
            </li>
            <li>
                <a href="#" 
                    class="hover:text-orange-400 transition duration-200">Posts</a>
            </li>
            <li>
                <a href="{{ route('auth.dashboard') }}" 
                    class="hover:text-orange-400 transition duration-200">Dashboard</a>
            </li>
            @auth
                <li>
                    <a href="{{ route('profile.profile') }}" 
                        class="hover:text-orange-400 transition duration-200">Profile</a>
                </li>
            @endauth
        </ul>

        <!-- Authentication Buttons -->
        <div class="flex items-center space-x-4">
            @guest
                <a href="{{ route('register-user') }}"
                    class="bg-orange-500 text-sm font-bold uppercase py-2 px-6 rounded-lg hover:bg-orange-600 transition">
                    Register
                </a>
                <a href="{{ route('login') }}"
                    class="bg-gray-700 text-sm font-bold uppercase py-2 px-6 rounded-lg hover:bg-gray-600 transition">
                    Login
                </a>
            @endguest
            @auth
                <a href="{{ route('logout') }}"
                    class="bg-orange-500 text-sm font-bold uppercase py-2 px-6 rounded-lg hover:bg-orange-600 transition">
                    Logout
                </a>
            @endauth

            <!-- Mobile Menu Toggle -->
            <button class="block md:hidden text-2xl text-orange-500 focus:outline-none hover:text-teal-400 transition">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Links -->
    <div class="md:hidden bg-gray-800">
        <ul class="space-y-2 py-4 px-6 font-medium text-gray-100">
            <li>
                <a href="{{ route('auth.home') }}" 
                    class="block hover:text-orange-400 transition duration-200">Home</a>
            </li>
            <li>
                <a href="#" 
                    class="block hover:text-orange-400 transition duration-200">Posts</a>
            </li>
            <li>
                <a href="{{ route('auth.dashboard') }}" 
                    class="block hover:text-orange-400 transition duration-200">Dashboard</a>
            </li>
            @auth
                <li>
                    <a href="{{ route('profile.profile') }}" 
                        class="block hover:text-orange-400 transition duration-200">Profile</a>
                </li>
            @endauth
        </ul>
    </div>
</nav>

