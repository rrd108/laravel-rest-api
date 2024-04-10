<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductsController;

Route::get('/products', [ProductsController::class, 'index']);
Route::post('/products', [ProductsController::class, 'store'])->middleware('auth:sanctum');
Route::patch('/products/{id}', [ProductsController::class, 'update'])->middleware('auth:sanctum');

Route::post('/users/login', [UsersController::class, 'login']);
Route::get('/users', [UsersController::class, 'index'])->middleware('auth:sanctum');
