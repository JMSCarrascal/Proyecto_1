<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesDataSampleController;


Route::get('/sales',[SalesDataSampleController::class,'index'])->name('sales.index');
Route::get('/sales/create',[SalesDataSampleController::class,'create'])->name('sales.create');
Route::get('/sales/store',[SalesDataSampleController::class,'store'])->name('sales.store');
Route::get('/sales/edit',[SalesDataSampleController::class,'edit'])->name('sales.edit');

//Route::resource('/sales',SalesDataSampleController::class);
