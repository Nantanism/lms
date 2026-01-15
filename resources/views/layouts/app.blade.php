<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Edu LMS') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">

    <!-- NAVBAR -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xl font-bold text-indigo-600">
                EduLMS
            </a>

            <div class="space-x-4">
                @guest
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-indigo-600">
                        Login
                    </a>
                    <a href="{{ route('register') }}"
                       class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                        Register
                    </a>
                @else
                    <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-indigo-600">
                        Dashboard
                    </a>

                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button class="text-red-500 hover:text-red-700">
                            Logout
                        </button>
                    </form>
                @endguest
            </div>
        </div>
    </nav>

    <!-- PAGE CONTENT -->
    <main>
        @yield('content')
    </main>

</body>
</html>
