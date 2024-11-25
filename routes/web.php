<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// bad practice -> reason -> function in route (x)
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BookController::class, 'welcome'])->name('welcome');

Route::post('/store', [BookController::class, 'store'])->name('store');

Route::get('/create', [BookController::class, 'createBook'])->name('createBook');

// url -> /view -> page view -> tampilin product
