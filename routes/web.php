<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

Route::get('/websites', [WebsiteController::class, 'index']);

Route::get('/', function () {
    return redirect('websites');
});