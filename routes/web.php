<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');

Route::get('/services', function () {
    return view('services');
})->name('service');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portofolio');

// Route::get('/contact', [ContactController::class, 'index'])->name('contact');
// Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
