@extends('layouts.app')

@section('title', 'Orders')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-4xl font-bold">Orders</h1>
        <button class="flex items-center bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
            </svg>
            Refresh
        </button>
    </div>

    <div class="mb-6 flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0">
        <div class="w-full md:w-auto">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <input type="text" placeholder="Search" class="pl-10 pr-4 py-2 w-full md:w-80 border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
        </div>

        <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4 w-full md:w-auto">
            <div class="flex items-center space-x-2">
                <span class="font-medium">Filter:</span>
                <select class="border border-gray-500 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>Date</option>
                    <option>Today</option>
                    <option>This Week</option>
                    <option>This Month</option>
                </select>
                <select class="border border-gray-500 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>Status</option>
                    <option>Completed</option>
                    <option>Pending</option>
                    <option>Cancelled</option>
                </select>
            </div>

            <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                New Order
            </button>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead>
                <tr class="border-b border-gray-500">
                    <th class="py-3 px-4 text-left font-medium text-gray-500">Order ID</th>
                    <th class="py-3 px-4 text-left font-medium text-gray-500">Account</th>
                    <th class="py-3 px-4 text-left font-medium text-gray-500">Date</th>
                    <th class="py-3 px-4 text-left font-medium text-gray-500">Status</th>
                    <th class="py-3 px-4 text-left font-medium text-gray-500">Total</th>
                    <th class="py-3 px-4 text-left font-medium text-gray-500">Actions</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection
