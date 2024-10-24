<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController as ApiProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/products', [ApiProductController::class, 'index']);
Route::get('/products/{id}', [ApiProductController::class, 'show']);
Route::post('/products/store', [ApiProductController::class, 'store']);
Route::put('/products/{id}', [ApiProductController::class, 'update']);
Route::delete('/products/{id}', [ApiProductController::class, 'destroy']);
