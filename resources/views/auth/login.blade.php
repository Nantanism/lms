<x-guest-layout>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Email</label>
            <input type="email" name="email" required autofocus
                class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-indigo-400">
        </div>

        <!-- Password -->
        <div class="mb-6">
            <label class="block text-gray-700 font-medium mb-1">Password</label>
            <input type="password" name="password" required
                class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-indigo-400">
        </div>

        <button
            class="w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
            Login
        </button>

    </form>

    <p class="text-center text-sm text-gray-500 mt-6">
        Don’t have an account?
        <a href="{{ route('register') }}" class="text-indigo-600 font-semibold hover:underline">
            Register
        </a>
    </p>

</x-guest-layout>
