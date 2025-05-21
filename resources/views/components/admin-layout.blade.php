<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Deliss Gift Shop')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Hellix&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@100..900&display=swap" rel="stylesheet" />

    @yield('styles')
    @stack('scripts')

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gray-100 font-sans flex flex-col">
    {{ $slot }}
</body>
</html>
