<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [WebsiteController::class, 'index']);
Route::get('/websites', [WebsiteController::class, 'index'])->middleware('auth');

Route::get('/', function () {
    return redirect('login');
})->middleware('auth');