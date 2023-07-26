<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\AuthController;
use App\Http\Controllers\API\V1\ProfileController;
use App\Http\Controllers\API\V1\ProductController;

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

        // * Products
        Route::get('products', [ProductController::class, 'index']);
        Route::get('products/{product}', [ProductController::class, 'show']);
        Route::post('products', [ProductController::class, 'store']);
        Route::put('products/{product}', [ProductController::class, 'update']);
        Route::delete('products/{product}', [ProductController::class, 'destroy']);
    });
});

// ! Version 2 API (if needed)
Route::prefix('v2')->group(function () {
    // TODO: Will be added if needed
});
