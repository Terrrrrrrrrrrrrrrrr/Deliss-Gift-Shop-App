@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <div class="bg-white pt-[150px] pb-12 min-h-screen">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-semibold text-gray-800">Products</h1>

                <select class="border border-gray-300 rounded px-3 py-2 text-gray-700">
                    <option value="">All Categories</option>
                    <option value="category-1">Category 1</option>
                    <option value="category-2">Category 2</option>
                </select>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="border border-gray-200 rounded-lg overflow-hidden shadow hover:shadow-md transition duration-300 bg-white text-gray-800">
                    <div class="w-full h-48 bg-gray-100 flex items-center justify-center">
                        <span class="text-gray-400">Product Image</span>
                    </div>
                    <div class="p-4">
                        <h2 class="text-lg font-semibold mb-1">Product Name</h2>
                        <p class="text-sm text-gray-500 mb-2">$99.99</p>
                        <button class="w-full bg-pink-600 text-white py-2 px-4 rounded hover:bg-pink-700 transition">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex justify-center">
                <nav class="flex space-x-2 text-gray-700">
                    <a href="#" class="px-3 py-1 border rounded hover:bg-gray-100">1</a>
                    <a href="#" class="px-3 py-1 border rounded hover:bg-gray-100">2</a>
                    <a href="#" class="px-3 py-1 border rounded hover:bg-gray-100">Next</a>
                </nav>
            </div>
        </div>
    </div>
@endsection
