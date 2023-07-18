<?php

use App\Domain\Categories\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/categories', [CategorieController::class, 'index'])->name('categories');
    Route::get('/category', [CategorieController::class, 'create'])->name('category.create');
    Route::post('/categorie', [CategorieController::class, 'store'])->name('category.store');
});
