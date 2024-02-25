<?php

use App\Http\Controllers\babykidController;
use App\Http\Controllers\beautyhealthController;
use App\Http\Controllers\foodbeverageController;
use App\Http\Controllers\homecareController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\penjualanController;
use App\Http\Controllers\userController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'home']);

Route::prefix('category')->group(function(){
    Route::get('/food-beverage', [foodbeverageController::class, 'fb']);
    Route::get('/beauty-health', [beautyhealthController::class, 'bh']);
    Route::get('/home-care', [homecareController::class, 'hc']);
    Route::get('/baby-kid', [babykidController::class, 'babykid']);
});

Route::get('/user/{id}/name/{name}', [userController::class, 'user']);

Route::get('/penjualan', [penjualanController::class, 'penjualan']);