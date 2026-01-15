<x-guest-layout>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Name</label>
            <input type="text" name="name" required
                class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-indigo-400">
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Email</label>
            <input type="email" name="email" required
                class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-indigo-400">
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Password</label>
            <input type="password" name="password" required
                class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-indigo-400">
        </div>

        <!-- Confirm -->
        <div class="mb-6">
            <label class="block text-gray-700 font-medium mb-1">Confirm Password</label>
            <input type="password" name="password_confirmation" required
                class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-indigo-400">
        </div>

        <!-- Role -->
        <div class="mb-6">
            <label class="block text-gray-700 font-medium mb-2">Select Role</label>
            <div class="grid grid-cols-2 gap-4">
                <label class="border rounded-lg p-4 text-center cursor-pointer hover:border-indigo-600">
                    <input type="radio" name="role" value="educator" class="hidden" required>
                    <div class="text-3xl">🎓</div>
                    <p class="font-semibold">Educator</p>
                </label>

                <label class="border rounded-lg p-4 text-center cursor-pointer hover:border-indigo-600">
                    <input type="radio" name="role" value="learner" class="hidden" required>
                    <div class="text-3xl">📘</div>
                    <p class="font-semibold">Learner</p>
                </label>
            </div>
        </div>

        <button
            class="w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
            Register
        </button>

    </form>

    <p class="text-center text-sm text-gray-500 mt-6">
        Already have an account?
        <a href="{{ route('login') }}" class="text-indigo-600 font-semibold hover:underline">
            Login
        </a>
    </p>

</x-guest-layout>
