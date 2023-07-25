<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\AuthController;
use App\Http\Controllers\API\V1\ProfileController;

// ! Version 1 API
Route::prefix('v1')->group(function () {

    // * Authentication
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);

    // ! Sanctum Middleware
    Route::middleware('auth:sanctum')->group(function () {
        // * Profile
        Route::get('/profile', [ProfileController::class, 'index']);
        Route::post('/profile', [ProfileController::class, 'update']);
        Route::post('/logout', [AuthController::class, 'logout']);
    });

    // TODO: Make Route for Product & Transaction
});

// ! Version 2 API (if needed)
Route::prefix('v2')->group(function () {
    // TODO: Will be added if needed
});
