<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;
use Mockery\Matcher\Subset;

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
Route::get('/register-form', [ParticipantController::class, 'create'])->name('form.index');
Route::get('/participants', [ParticipantController::class, 'index'])->name('participants');
Route::post('/participanst/store', [ParticipantController::class, 'store'])->name('participants.store');
Route::get('/participant/{participant}', [ParticipantController::class, 'show'])->name('participant.show');
//* Products
Route::resource('products', ProductController::class);
//* Emails
Route::resource('emails', EmailController::class);
Route::post('/emails/filter', [EmailController::class, 'filterEmails'])->name('emails.filter');

//* Gallery
Route::resource('/gallery', GalleryController::class);

//* Posts
Route::resource('/posts', PostController::class);
Route::resource('/comments', CommentController::class);

//* Clubs - subscribers

Route::resource('/clubs', ClubController::class);
Route::get('/subscribers', [SubscriberController::class, 'index']);
Route::get('/subscribers/{club}', [SubscriberController::class, 'create'])->name('subsciber.create');
Route::post('/subscriber/store', [SubscriberController::class, 'store'])->name('subsciber.store');
Route::get('/contact', function () {
    return view('Contact.contact');
})->name('contact');