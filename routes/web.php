<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('cars', CarController::class);
Route::resource('products', ProductController::class);
