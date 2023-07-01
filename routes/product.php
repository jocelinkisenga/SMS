<?php

use App\Domain\Products\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('products',[ProductController::class,'index'])->name('product.index');
Route::get('create',[ProductController::class,'create'])->name('product.create');
Route::post('store',[ProductController::class,'store'])->name('product.store');
