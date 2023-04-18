<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function(){
    Route::post('login', [AuthController::class, 'login']);
});

// Route::get('teste', function () {
//     return response()->json(['teste' => 'teste']);
// });
