@vite('resources/css/app.css')

<h1 class="text-3xl font-bold text-center my-6">Login Form</h1>

<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <form action="{{ route('login') }}" method="POST" class="w-full max-w-md bg-white rounded-lg shadow-md p-6 space-y-4">
        @csrf

        <div>
            <label for="email" class="block text-gray-700 font-semibold mb-2">Email:</label>
            <input type="email" name="email" id="email" 
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                   placeholder="Enter your email">
        </div>

        <div>
            <label for="password" class="block text-gray-700 font-semibold mb-2">Password:</label>
            <input type="password" name="password" id="password" 
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                   placeholder="Enter your password">
        </div>

        <button type="submit" 
                class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
            Submit
        </button>

        <p class="text-center text-gray-600 mt-4">Don't have an account? 
            <a href="{{ route('register-user') }}" class="text-blue-500 hover:underline">Register</a>
        </p>
    </form>
</div>
