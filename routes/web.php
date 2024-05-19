<?php

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
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DealerController;

Route::get('/brands', [BrandController::class, 'index']);

Route::get('/models', [ModelController::class, 'index']);

Route::get('/vehicles', [VehicleController::class, 'index']);

Route::get('/customers', [CustomerController::class, 'index']);

Route::get('/dealers', [DealerController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
