<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// } );
Route::get('/home',  [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/contact', function () {
    return view('Contact.contact');
})->name('contact');