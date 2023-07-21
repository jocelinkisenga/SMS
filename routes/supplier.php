<?php

use App\Domain\Supplier\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('suppliers', [SupplierController::class, 'index']);
    Route::get("supplier",[SupplierController::class,"create"])->name("supplier.create");
});
