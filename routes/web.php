<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesDataSampleController;


Route::get('/sales',[SalesDataSampleController::class,'index'])->name('sales.index');
Route::get('/sales/import',[SalesDataSampleController::class,'import']);