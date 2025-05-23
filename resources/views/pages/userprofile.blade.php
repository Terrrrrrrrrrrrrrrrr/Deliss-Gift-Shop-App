<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Deliss Gift Shop')</title>

    <blade
        vite|(%5B%26%2339%3Bresources%2Fcss%2Fapp.css%26%2339%3B%2C%20%26%2339%3Bresources%2Fjs%2Fapp.js%26%2339%3B%5D)%0D>
        @stack('scripts')
        @yield('styles')

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@100..900&display=swap"
            rel="stylesheet">
</head>

<body class="font-[Montserrat] text-gray-800 bg-white">
    <header class="fixed top-0 left-0 right-0 z-50">
        @include('components.header')
    </header>

    <div class="flex mt-10">
        <!-- Sidebar -->
        <aside class="flex w-64 bg-black text-white p-6 flex flex-col justify-between min-h-screen">
            <div>
                <h2 class="text-xl font-bold mb-6">Menu</h2>
                <nav class="space-y-4">
                    <a href="#"
                        class="flex items-center gap-2 px-4 py-2 bg-gray-800 rounded border border-white hover:bg-gray-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M3 4a1 1 0 011-1h16a1 1 0 011 1v16a1 1 0 01-1 1H4a1 1 0 01-1-1V4z" />
                        </svg>
                        My Profile
                    </a>
                    <a href="#"
                        class="flex items-center gap-2 px-4 py-2 bg-gray-800 rounded border border-white hover:bg-gray-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M3 3h18M9 3v18m6-18v18M3 9h18M3 15h18" />
                        </svg>
                        My Purchase
                    </a>
                </nav>
            </div>
            <button
                class="mt-6 w-full flex items-center justify-center gap-2 px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded border border-red-700">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a1 1 0 01-1 1H6a1 1 0 01-1-1V7a1 1 0 011-1h6a1 1 0 011 1v1" />
                </svg>
                Log Out
            </button>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 max-w-3xl mx-auto p-6 mt-10">
            <div class="flex justify-between items-center mb-4 mx-4">
                <h1 class="text-3xl font-bold">My Profile</h1>
                <button onclick="location.reload()"
                    class="flex items-center gap-2 bg-white text-black border border-gray-300 px-4 py-2 rounded shadow-md hover:bg-gray-100">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor">
                        <path
                            d="M142.9 142.9c-17.5 17.5-30.1 38-37.8 59.8c-5.9 16.7-24.2 25.4-40.8 19.5s-25.4-24.2-19.5-40.8C55.6 150.7 73.2 122 97.6 97.6c87.2-87.2 228.3-87.5 315.8-1L455 55c6.9-6.9 17.2-8.9 26.2-5.2s14.8 12.5 14.8 22.2l0 128c0 13.3-10.7 24-24 24l-8.4 0c0 0 0 0 0 0L344 224c-9.7 0-18.5-5.8-22.2-14.8s-1.7-19.3 5.2-26.2l41.1-41.1c-62.6-61.5-163.1-61.2-225.3 1zM16 312c0-13.3 10.7-24 24-24l7.6 0 .7 0L168 288c9.7 0 18.5 5.8 22.2 14.8s1.7 19.3-5.2 26.2l-41.1 41.1c62.6 61.5 163.1 61.2 225.3-1c17.5-17.5 30.1-38 37.8-59.8c5.9-16.7 24.2-25.4 40.8-19.5s25.4 24.2 19.5 40.8c-10.8 30.6-28.4 59.3-52.9 83.8c-87.2 87.2-228.3 87.5-315.8 1L57 457c-6.9 6.9-17.2 8.9-26.2 5.2S16 449.7 16 440l0-119.6 0-.7 0-7.6z" />
                    </svg>
                    Refresh
                </button>

            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex flex-col items-center mb-6">
                    <div class="w-24 h-24 bg-gray-300 rounded-full flex items-center justify-center mb-2">
                        <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z" />
                        </svg>
                    </div>
                    <button class="bg-white border px-4 py-1 rounded shadow text-sm hover:bg-gray-100">Upload
                        Photo</button>
                    <p class="text-xs text-gray-500 mt-1">File size: maximum 1 MB<br>File extension: .JPEG, .PNG</p>
                </div>

                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Username</label>
                        <input type="text" value="Micheal_Jakson" class="w-full border px-3 py-2 rounded" />
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Email Address</label>
                        <input type="email" value="micheal.jakson@gmail.com" class="w-full border px-3 py-2 rounded" />
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Contact Number</label>
                        <input type="text" value="099999999" class="w-full border px-3 py-2 rounded" />
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Current Password</label>
                        <input type="password" value="**********" class="w-full border px-3 py-2 rounded" />
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Confirm Password</label>
                        <input type="password" value="******" class="w-full border px-3 py-2 rounded" />
                    </div>
                    <div class="text-center text-red-500 text-sm underline cursor-pointer">Change Password</div>
                    <div class="pt-4 flex items-center justify-center">
                        <button type="submit"
                            class="w-96 bg-red-600 text-white py-2 rounded hover:bg-red-700 font-semibold">SAVE</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <footer>
        @include('components.footer')
    </footer>
</body>

</html>
