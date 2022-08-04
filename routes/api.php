<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ScoreController;

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
});

Route::controller(ScoreController::class)->middleware('auth:api')->group(function () {
    Route::get('score', 'index');
    Route::post('score', 'store');
}); 