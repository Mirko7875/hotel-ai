<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HotelController;
use App\Http\Controllers\Api\BookingController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hotels', [HotelController::class, 'index']);
Route::get('/hotels/{id}', [HotelController::class, 'show']);
Route::get('/search/{city}', [HotelController::class, 'search']);
Route::get('/recommendations', [HotelController::class, 'recommend']);
Route::post('/bookings', [BookingController::class, 'store'])
    ->withoutMiddleware([VerifyCsrfToken::class]);