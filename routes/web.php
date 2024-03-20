<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;


Route::get('/', function () {
    return view('index');
});

Route::get('/tentang', function () {
    return view('tentang');
});

// Menampilkan formulir registrasi
Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');

// Memproses permintaan registrasi
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');




// Menampilkan form login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Memproses login
Route::post('/login', [LoginController::class, 'login']);


Route::get('/dashboard', 'DashboardController@index')->middleware('verified');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

