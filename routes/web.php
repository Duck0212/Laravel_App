<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return 'Page home';
})->name('home');

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