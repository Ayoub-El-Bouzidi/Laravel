<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

// Display contact form
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');

// Handle form submission
Route::post('/contact/send', [ContactController::class, 'sendEmail'])->name('contact.send');


