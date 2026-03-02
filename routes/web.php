<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// } );
Route::get('/home',  [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::post('/students/store', [StudentController::class, 'store'] )->name('students.store');
Route::get('/contact', function () {
    return view('Contact.contact');
})->name('contact');