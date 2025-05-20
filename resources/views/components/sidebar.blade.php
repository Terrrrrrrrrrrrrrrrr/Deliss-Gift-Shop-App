<!-- Sidebar -->
 <div id="sidebar" class="w-64 bg-[#1E1E1E] text-white h-screen fixed top-0 left-0 pt-16 z-10 transition-transform duration-300 ease-in-out transform -translate-x-full">
    <button id="sidebar-close" class="absolute top-12 left-5 text-white hover:text-gray-400">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>
    <div class="p-4 mt-4">
        <h2 class="text-center text-2xl text-gray-400 mb-4">Menu</h2>
        <nav>
            <ul class="space-y-2">
                <li>
                    <a href="" class="block p-3 rounded border border-gray-700 hover:bg-gray-800 flex items-center {{ request()->routeIs('dashboard') ? 'bg-black bg-opacity-30 border-l-4 border-pink-300' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="" class="block p-3 rounded border border-gray-700 hover:bg-gray-800 flex items-center {{ request()->routeIs('orders') ? 'bg-black bg-opacity-30 border-l-4 border-pink-300' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                        Orders
                    </a>
                </li>
                <li>
                    <a href="" class="block p-3 rounded border border-gray-700 hover:bg-gray-800 flex items-center {{ request()->routeIs('inventory') ? 'bg-black bg-opacity-30 border-l-4 border-pink-300' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                        Inventory
                    </a>
                </li>
                <li>
                    <a href="" class="block p-3 rounded border border-gray-700 hover:bg-gray-800 flex items-center {{ request()->routeIs('transactions') ? 'bg-black bg-opacity-30 border-l-4 border-pink-300' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        Transactions
                    </a>
                </li>
                <li>
                    <a href="" class="block p-3 rounded border border-gray-700 hover:bg-gray-800 flex items-center {{ request()->routeIs('accounts') ? 'bg-black bg-opacity-30 border-l-4 border-pink-300' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        Accounts
                    </a>
                </li>
                <li>
                    <a href="" class="block p-3 rounded border border-gray-700 hover:bg-gray-800 flex items-center {{ request()->routeIs('audit-trail') ? 'bg-black bg-opacity-30 border-l-4 border-pink-300' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Audit Trail
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="mt-auto bottom-10 p-4 absolute w-full">
        <form method="POST" action="">
            @csrf
            <button type="submit" class="w-full p-3 bg-red-700 text-white hover:bg-red-600 rounded flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                Log Out
            </button>
        </form>
    </div>
</div>
<div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-9 hidden"></div>
<!-- Vanilla JavaScript for sidebar toggle -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const sidebarClose = document.getElementById('sidebar-close');
        const sidebar = document.getElementById('sidebar');

        sidebarToggle.addEventListener('click', function () {
            sidebar.classList.toggle('-translate-x-full');
        });

        sidebarToggle.addEventListener('click', function () {
            sidebarToggle.classList.toggle('hidden');
        });

        sidebarClose.addEventListener('click', function () {
            sidebar.classList.add('-translate-x-full');
        });

        sidebarClose.addEventListener('click', function () {
            sidebarToggle.classList.remove('hidden');
        });
    });
</script>

