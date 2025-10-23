<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\PasienController::class, 'index'])->name('home');

Route::resources([
    'pasiens' => App\Http\Controllers\PasienController::class,
]);
