<?php


use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('home');

Route::prefix('auth')->group(function() {
    Route::post('/register', RegisterController::class)->name('auth.register');
});
