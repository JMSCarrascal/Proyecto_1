<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesDataSampleController;

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

Route::resource('/sales',SalesDataSampleController::class);
// Route::get('/sales',[alesDataSampleController::class,'index'])->name('sales');
// Route::get('sale/create',[SalesDataController::class,'create']);
// Route::get('sale/edit', [SalesDataController::class,'edit']);
