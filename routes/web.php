<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('barang')->group(function () {
    Route::get('/', [BarangController::class, 'index']);
    Route::post('/insert', [BarangController::class, 'insert']);
    Route::post('/update', [BarangController::class, 'update']);
    Route::post('/delete', [BarangController::class, 'delete']);
});

Route::prefix('supplier')->group(function () {
    Route::get('/', [SupplierController::class, 'index']);
    Route::post('/insert', [SupplierController::class, 'insert']);
    Route::post('/update', [SupplierController::class, 'update']);
    Route::post('/delete', [SupplierController::class, 'delete']);
});