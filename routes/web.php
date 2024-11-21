<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// bad practice -> reason -> function in route (x)
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'welcome']);

Route::get('/create', [PageController::class, 'createForm']);

// url -> /view -> page view -> tampilin product
