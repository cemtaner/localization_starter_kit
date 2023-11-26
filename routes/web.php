<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\languageController;
use App\Http\Controllers\pageController;

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

Route::get('/{locale}',[languageController::class,'index'])->name('lang');

Route::get('/{locale}/{slug}',[pageController::class,'page'])->name('page');