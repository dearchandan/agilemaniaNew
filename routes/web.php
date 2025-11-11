<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,'index'])->name('home');

// Fallback route for 404 page
Route::fallback(fn() => response()->view('pages.404', [], 404));