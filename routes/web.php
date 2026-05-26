<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', [ProductController::class, 'index']);

Route::post('/store', [ProductController::class, 'store']);

Route::post('/update/{id}', [ProductController::class, 'update']);

Route::get('/delete/{id}', [ProductController::class, 'destroy']);