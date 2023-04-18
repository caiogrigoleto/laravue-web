<?php

use App\Http\Controllers\AuthController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\CustomerController;

Route::prefix('v1')->group(function(){
    Route::post('login', [AuthController::class, 'login']);

    Route::prefix('products')->group(function(){
        Route::get('', [ProductController::class, 'index']);
        Route::get('/{product}', [ProductController::class, 'show']);
        Route::post('', [ProductController::class, 'store']);
        Route::put('/{product}', [ProductController::class, 'update']);
        Route::delete('/{product}', [ProductController::class, 'destroy']);
    });

    Route::prefix('groups')->group(function(){
        Route::get('', [GroupsController::class, 'index']);
        Route::get('/{groups}', [GroupsController::class, 'show']);
        Route::post('', [GroupsController::class, 'store']);
        Route::put('/{groups}', [GroupsController::class, 'update']);
        Route::delete('/{groups}', [GroupsController::class, 'destroy']);
    });

    Route::prefix('customers')->group(function(){
        Route::get('', [CustomerController::class, 'index']);
        Route::get('/{customer}', [CustomerController::class, 'show']);
        Route::post('', [CustomerController::class, 'store']);
        Route::put('/{customer}', [CustomerController::class, 'update']);
        Route::delete('/{customer}', [CustomerController::class, 'destroy']);
    });
});

// Route::get('teste', function () {
//     return response()->json(['teste' => 'teste']);
// });

