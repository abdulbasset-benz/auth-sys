@vite('resources/css/app.css')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-gray-700 mb-6 text-center">Register</h2>
        <form action="{{ route('register-user') }}" method="POST" class="space-y-6">
            @csrf


            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" required
                    class="mt-1 p-3 w-full border rounded-lg focus:ring focus:ring-indigo-200 outline-none">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>


            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" required
                    class="mt-1 p-3 w-full border rounded-lg focus:ring focus:ring-indigo-200 outline-none">
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>


            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" required
                    class="mt-1 p-3 w-full border rounded-lg focus:ring focus:ring-indigo-200 outline-none">
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>


            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm
                    Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                    class="mt-1 p-3 w-full border rounded-lg focus:ring focus:ring-indigo-200 outline-none">
            </div>


            <div>
                <button type="submit"
                    class="w-full py-3 text-white bg-indigo-600 rounded-lg hover:bg-indigo-500 focus:ring focus:ring-indigo-200 transition">
                    Register
                </button>
            </div>
        </form>
    </div>
</div>
