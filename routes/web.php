<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return 'fmerfm';
});

Route::get('/contact', function () {
    return 'Hello';
});


// Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
// Route::post('/contact/send', [ContactController::class, 'sendEmail'])->name('contact.send');
