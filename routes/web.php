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


Route::prefix('admin')->group(function () {
    Route::get('/home', [AdminController::class, 'index'])->middleware('admin.panel')->name('admin.home');
    Route::get('/order/{order}', [AdminController::class, 'order'])->middleware('admin.panel')->name('admin.order');
    Route::post('/order/{order}/update', [AdminController::class, 'update'])->middleware('admin.panel')->name('orders.change');
});



Route::prefix('auth')->group(function () {
    Route::post('/register', [RegisterController::class, 'register'])->name('auth.register');
    Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
    Route::post('/logout', LogoutController::class)->name('auth.logout');
});

Route::prefix('orders')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->middleware('login.auth')->name('orders');
    Route::get('/{order}', [OrderController::class, 'show'])->name('orders.show');
    Route::post('/create', [OrderController::class, 'create'])->name('orders.create');
});
