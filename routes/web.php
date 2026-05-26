<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'menu'])->name('menu');

Route::get('/dashboard', [ProductController::class, 'dashboard'])->name('dashboard');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::put('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/delete/{id}', [ProductController::class, 'destroy'])->name('products.destroy');