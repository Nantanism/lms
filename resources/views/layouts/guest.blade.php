<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edu Fairuzullah LMS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    <!-- FULL SCREEN BACKGROUND -->
    <div class="min-h-screen flex items-center justify-center
                bg-gradient-to-br from-indigo-700 via-purple-600 to-pink-500">

        <!-- CENTER CARD -->
        <div class="w-full max-w-lg bg-white/90 backdrop-blur
                    rounded-2xl shadow-2xl p-8">

            <!-- LOGO / TITLE -->
            <div class="text-center mb-6">
                <h1 class="text-3xl font-extrabold text-indigo-700">
                    Edu Fairuzullah LMS
                </h1>
                <p class="text-gray-500 mt-1">
                    Learn • Teach • Grow
                </p>
            </div>

            <!-- PAGE CONTENT -->
            {{ $slot }}

        </div>
    </div>

</body>
</html>
