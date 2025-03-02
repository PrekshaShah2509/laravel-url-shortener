<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortUrlController;

Route::get('/', [ShortUrlController::class, 'index']);
Route::post('/shorten', [ShortUrlController::class, 'store']);
Route::get('/{code}', [ShortUrlController::class, 'redirect']);