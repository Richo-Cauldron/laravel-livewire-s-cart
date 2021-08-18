<?php

use App\Http\Controllers\ProductController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::get('/product', [ProductController::class, 'index']);

Route::get('/product/{product}', [ProductController::class, 'show']);




