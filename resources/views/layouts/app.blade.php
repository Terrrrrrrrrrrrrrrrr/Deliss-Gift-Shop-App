<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Deliss Gift Shop')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Hellix&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@100..900&display=swap" rel="stylesheet" />

    @yield('styles')
    @stack('scripts')

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gray-100 font-sans flex flex-col">
    <header>
        <div class="w-full py-0 px-1 bg-gray-100">
            <div class="flex justify-end space-x-3 text-sm container mx-auto">
                <a href="{{ route('aboutus') }}" class="text-gray-700 hover:underline">about us</a>
                <a href="{{ route('aboutus') }}" class="text-gray-700 hover:underline">contacts</a>
                <a href="{{ route('aboutus') }}" class="text-gray-700 hover:underline">franchising</a>
            </div>
        </div>
        @include('components.header')
    </header>

    @if(Request::is('home') || Request::is('aboutus') || Request::is('login') || Request::is('register') || Request::is('shopping') || Request::is('products'))
    <body>
        <main>
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @endif

            @yield('content')
        </main>
    </body>
    @endif

    @if(Request::is('dashboard') || Request::is('orders'))
        <body class="font-sans antialiased">
                <div class="min-h-screen flex flex-col">
                    <div class="flex flex-1">
                        @include('components.sidebar')
                        <!-- Main Content -->
                        <div class="flex-1 md: bg-gray-200">
                            <main class="p-5">
                                @yield('content')
                            </main>
                        </div>
                    </div>
                </div>
        </body>
    @endif

    @unless (Route::currentRouteName() === 'dashboard' || Route::currentRouteName() === 'orders')
        <footer>
            @include('components.footer')
        </footer>
    @endunless
</body>
</html>
