@php
    $isLoggedIn = auth()->check();
    $cartCount = session('cart_count', 0);
@endphp

<header class="w-full text-white py-3 px-4 bg-[#1E1E1E]">
    <div class="container mx-auto flex items-center justify-between">
        @unless (Route::currentRouteName() === 'dashboard')
        <a href="/" class="text-5xl font-hellix text-rose-300">Deliss</a>
            <!-- Search bar -->
            <div class="flex-grow mx-4">
                <form action="/search" method="GET" class="flex">
                    <input 
                        type="text" 
                        name="query" 
                        placeholder="lorem ipsum dolor sit amet" 
                        class="w-full px-4 py-2 rounded-l-full text-black bg-white"
                    >
                    <button type="submit" class="bg-pink-300 text-gray-800 px-4 py-2 rounded-r-full flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        Search
                    </button>
                </form>
            </div>
             <!-- User actions -->
            <div class="flex items-center space-x-4">
                @if ($isLoggedIn)
                    <a href="{{ route('account') }}" class="hover:underline">My Account</a>
                @else
                    <a href="{{ route('login') }}" class="flex items-center hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Sign in
                    </a>
                @endif
                <a href="{{ route('register') }}" class="px-4 py-2 bg-[#333333] text-white rounded-full hover:bg-gray-700">
                    Sign up
                </a>

                <!-- Shopping cart -->
                <a href="{{ route('products.index') }}" class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    @if ($cartCount > 0)
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white rounded-full text-xs w-5 h-5 flex items-center justify-center">
                            {{ $cartCount }}
                        </span>
                    @endif
                </a>
            </div>
        @endunless

        @if(Route::currentRouteName() === 'dashboard')
            <div class="flex items-left">
                <button id="sidebar-toggle" class="mr-4 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <a href="/" class="text-5xl font-hellix text-rose-300">Deliss</a>
            </div>
            <div class="flex items-center">
                <a href="#" class="flex items-center bg-gray-700 rounded-full px-4 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Admin
                </a>
            </div>
        @endif
    </div>
</header>
