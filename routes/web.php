<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('home');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/orders', [OrderController::class, 'index'])->middleware('login.auth')->name('orders');
Route::get('/orders/{order}', ShowController::class)->name('orders.show');

Route::get('/admin-menu', [AdminController::class, 'index'])->middleware('admin.panel')->name('admin');

Route::prefix('auth')->group(function () {
    Route::post('/register', [RegisterController::class, 'register'])->name('auth.register');
    Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
    Route::post('/logout', LogoutController::class)->name('auth.logout');
});

Route::prefix('orders')->group(function () {
    Route::post('/create', [OrderController::class, 'create'])->name('orders.create');
});
