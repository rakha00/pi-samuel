<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cart/add', [ProductController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/remove', [ProductController::class, 'removeFromCart'])->name('cart.remove');
