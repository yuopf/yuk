<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('index');
});

Route::get('/renovation', function () {
    return view('renovation');
});

Route::get('/found', function () {
    return view('found');
});

Route::get('/gallery', function () {
    return view('gallery');
});


Route::get('/registr', function () {
    return view('registr');
});

Route::post('/registr', [RegisterController::class, 'store']);

Route::get('/login', function () {
    return view('login');
})->name('login.form');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/calculator', function () {
    return view('calculator');
});