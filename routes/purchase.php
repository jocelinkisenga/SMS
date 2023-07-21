<?php

use App\Domain\Purchase\Http\Controllers\PurchaseController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('purchases/', [PurchaseController::class, 'index'])->name('purchases.index');
    Route::get('purchase', [PurchaseController::class, 'create'])->name('purchase.create');
});
