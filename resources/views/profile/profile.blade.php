<x-layout>
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Profile</h1>

    <form action="{{ route('profile.update') }}" method="post" class="bg-white shadow-md rounded-lg p-6 max-w-md mx-auto">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-semibold mb-2">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name', auth()->user()->name) }}"
                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
            @error('name')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit"
            class="w-full bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-indigo-700 transition duration-300">
            Update
        </button>
    </form>
</x-layout>
