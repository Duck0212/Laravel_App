<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('category', [CategoryController::class, 'index'])->name('category');
Route::get('search', [SearchController::class, 'index'])->name('search');
Route::get('product-detail', [ProductDetailController::class, 'index'])->name('product-detail');
Route::get('cart', [CartController::class, 'index'])->name('cart');
Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('register', [RegisterController::class, 'index'])->name('register');

Route::get('/shop', function () {
    return 'Page shop';
})->middleware('checkAge');

Route::get('/about', function () {
    return 'Page about';
});

Route::get('/contact', function () {
    return 'Page contact';
});

Route::post('/post', function () {
    echo 'Method post';
});

Route::put('/put', function () {
    return 'Method put';
});

Route::prefix('admin')->group(function () {
    Route::get('posts/{post}/comments/{comment}', function ($postID, $commentID) {
        return "postID: $postID - commentID: $commentID";
    });

    Route::get('/users/{name?}', function ($name = 'John') {
        return $name;
    });
});

Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);
Route::resource('orderproducts', OrderProductController::class);
