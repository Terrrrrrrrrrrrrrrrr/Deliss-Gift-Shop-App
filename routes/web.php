<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

Route::redirect('/', '/home');

Route::get('/home', function () {
    return view('pages.homepage'); 
});

Route::get('/shopping', function () {
    return view('pages.shoppingpage');
})->name('shopping');

Route::get('/aboutus', function () {
    return view('pages.aboutuspage');
})->name('aboutus');

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.register');
})->name('register');


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::post('/products/{id}/toggle-like', [ProductController::class, 'toggleLike'])->name('products.toggle-like');


// admin dashboard page
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
