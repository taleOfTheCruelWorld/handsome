<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OrderController::class, 'index'])->name('main');

Route::post('/', [OrderController::class, 'store'])->name('send_form');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'loginHandle'])->name('login_handler');

Route::get('/admin', [AuthController::class, 'cabinet'])->name('admin');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');