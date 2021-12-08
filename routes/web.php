<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesDataController;

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

Route::resource('/sale',SalesDataController::class);
// Route::get('/sale',[SalesDataController::class,'index']);
// Route::get('sale/create',[SalesDataController::class,'create']);
// Route::get('sale/edit', [SalesDataController::class,'edit']);
