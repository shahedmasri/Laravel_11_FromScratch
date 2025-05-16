<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');


Route::get('posts/{post}', [PostController::class, 'show'])->name('post.show');


Route::middleware('is_admin')->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('posts', PostController::class);
});
