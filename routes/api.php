<?php

use App\Http\Controllers\AuthController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::prefix('v1')->group(function(){
    Route::post('login', [AuthController::class, 'login']);

    Route::prefix('products')->group(function(){
        Route::get('', [ProductController::class, 'index']);
        Route::get('/{id}', [ProductController::class, 'show']);
        Route::post('', [ProductController::class, 'store']);
        Route::put('/{id}', [ProductController::class, 'update']);
        Route::delete('/{id}', [ProductController::class, 'destroy']);
    });
});

// Route::get('teste', function () {
//     return response()->json(['teste' => 'teste']);
// });

