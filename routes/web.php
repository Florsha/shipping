<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('index');
})->name('home');

// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/welcome', function () {
    return view('welcome');
})->name('contact');

Route::get('/incoming', function () {
    return view('incoming');
})->name('incoming');

Route::get('/colors', function () {
    return view('colors');
})->name('colors');

Route::get('/typography', function () {
    return view('typography');
})->name('typography');