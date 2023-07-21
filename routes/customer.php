<?php

use App\Domain\Customer\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;


Route::middleware("auth")->group(function(){
    Route::get("customers/",[CustomerController::class,'index'])->name("customers.index");
});
