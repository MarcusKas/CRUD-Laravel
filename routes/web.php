<?php

use App\Http\Controllers\MpesaController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SalesController;
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
// Route::get('/sales', function () {
//     return view('sales.index');
// });
Route::resource('/sales', SaleController::class);

// mpesa testing
Route::get('/mpesa', [MpesaController::class,'mpesa'])->name('mpesa');
