<?php


use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class);

Route::post('/register', RegisterController::class)->name('register');
