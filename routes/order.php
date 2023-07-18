<?php

use App\Domain\Order\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/orders', [OrderController::class, 'index'])->name('order.all');
    Route::get('order/{id}', [OrderController::class, 'show'])->name('order.show');
    Route::post('order', [OrderController::class, 'store'])->name('order.store');
    Route::post('order', [OrderController::class, 'delete'])->name('order.delete');
});
