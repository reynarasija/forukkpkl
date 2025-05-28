<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- Styles -->
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f9fafb;
            margin: 0;
            text-align: center;
            flex-direction: column;
        }

        img {
            height: 100px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 2rem;
            color: #1f2937;
        }
    </style>
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
        @if (Route::has('login'))
        <nav style="display: flex; justify-content: flex-end; gap: 10px; margin-bottom: 20px;">
        @auth
            <a
                href="{{ url('/dashboard') }}"
                style="padding: 8px 16px; background-color: #1f2937; color: white; border: none; border-radius: 4px; text-decoration: none;"
            >
                Dashboard
            </a>
        @else
            <a
                href="{{ route('login') }}"
                style="padding: 8px 16px; background-color: #4b5563; color: white; border: none; border-radius: 4px; text-decoration: none;"
            >
                Log in
            </a>

            @if (Route::has('register'))
                <a
                    href="{{ route('register') }}"
                    style="padding: 8px 16px; background-color: #6b7280; color: white; border: none; border-radius: 4px; text-decoration: none;"
                >
                    Register
                </a>
            @endif
        @endauth
        </nav>
        @endif
        </header>
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <h1>Selamat datang di aplikasi PKL Stembayo</h1>
        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
