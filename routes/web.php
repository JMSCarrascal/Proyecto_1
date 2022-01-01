<?php use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesDataSampleController;


Route::resource('/sales', SalesDataSampleController::class);


