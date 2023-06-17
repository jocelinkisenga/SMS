<?php
/**
 * This file returns routes related to user auth
 */
use App\Domain\User\Http\Controllers\Auth\LoginController;
use App\Domain\User\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function(){
    Route::get('/login',[LoginController::class,'create'])->name('login');
    Route::get('/register',[RegisterController::class,'create'])->name('register');
    Route::post('/login',[LoginController::class,'store'])->name('login');
    Route::post('/register',[RegisterController::class,'store'])->name('register');
});
