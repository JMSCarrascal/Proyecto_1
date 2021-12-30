<?php use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesDataSampleController;


Route::resource('/sales', SalesDataSampleController::class);


// Route::get('/sales',[SalesDataSampleController::class,'index'])->name('sales.index');
// Route::get('/sales/create',[SalesDataSampleController::class,'create'])->name('sales.create');
// Route::get('/sales/store',[SalesDataSampleController::class,'store'])->name('sales.store');
// Route::get('/sales/edit',[SalesDataSampleController::class,'edit'])->name('sales.edit');
// Route::get('/sales/update',[SalesDataSampleController::class,'update'])->name('sales.update');
