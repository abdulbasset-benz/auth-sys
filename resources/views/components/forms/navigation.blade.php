@vite('resources/css/app/css')

<nav class="bg-slate-500 py-6 mb-5">
    <div class="flex justify-between items-center mx-auto max-w-5xl text-slate-100">
        <div>
            <a href="{{ route('auth.home') }}">
                <h1 class="font-extrabold text-xl">MyApp</h1>
            </a>
        </div>
        <ul class="flex items-center space-x-20 capitalize font-semibold">
            <li><a class="hover:text-blue-300" href="{{ route('auth.home') }}">home</a></li>
            <li><a class="hover:text-blue-300" href="#">posts</a></li>
            <li><a class="hover:text-blue-300" href="{{ route('auth.dashboard') }}">dashboard</a></li>
        </ul>

        @guest
            <div>
                <a class="py-2.5 px-8 mr-6 bg-blue-500 uppercase font-semibold rounded-md hover:bg-blue-700" href="{{ route('register-user') }}">register</a>
                <a class="py-2.5 px-8 bg-blue-500 uppercase font-semibold rounded-md hover:bg-blue-700" href="{{ route('login') }}">login</a>
            </div>
        @endguest
        @auth
            <div>
                <a class="py-2.5 px-8 bg-blue-500 uppercase font-semibold rounded-md hover:bg-blue-700"
                    href="{{ route('logout') }}">logout</a>
            </div>
        @endauth
    </div>


</nav>
