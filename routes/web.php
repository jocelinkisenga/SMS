<?php

use App\Domain\Home\Http\Controllers\HomeController;
use App\Domain\User\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function(){
    Route::get('/',[HomeController::class,'index'])->name('home');
});
require_once __DIR__.'/../routes/categorie.php';
require_once __DIR__.'/../routes/product.php';
require_once __DIR__.'/../routes/auth.php';
