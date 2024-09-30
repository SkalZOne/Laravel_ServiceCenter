<?php


use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('home');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LogoutController::class, 'index'])->middleware('login.auth')->name('logout');


Route::prefix('auth')->group(function() {
    Route::post('/register', [RegisterController::class, 'register'])->name('auth.register');
    Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
    Route::post('/logout', [LogoutController::class, 'logout'])->name('auth.logout');
});
