<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PKL Stembayo</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind (if not using @vite or mix, otherwise load via app.css) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-100 flex flex-col items-center justify-center min-h-screen p-6">

    <!-- Navbar -->
    @if (Route::has('login'))
        <nav class="w-full max-w-6xl flex justify-end gap-4 mb-8">
            @auth
                <a href="{{ url('/dashboard') }}"
                   class="px-5 py-2 text-sm rounded border border-gray-300 dark:border-gray-600 hover:border-gray-500 dark:hover:border-gray-400">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                   class="px-5 py-2 text-sm rounded border border-transparent hover:border-gray-300 dark:hover:border-gray-500">
                    Log in
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="px-5 py-2 text-sm rounded border border-gray-300 dark:border-gray-600 hover:border-gray-500 dark:hover:border-gray-400">
                        Register
                    </a>
                @endif
            @endauth
        </nav>
    @endif

    <!-- Logo & Welcome -->
    <div class="text-center">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-24 mx-auto mb-6">
        <h1 class="text-2xl md:text-3xl font-semibold">Selamat datang di aplikasi PKL Stembayo</h1>
    </div>

</body>
</html>
