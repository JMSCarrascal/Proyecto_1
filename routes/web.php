<?php use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SalesDataSampleController;



Route::resource('/sales', SalesDataSampleController::class);
// Route::get('/sales', [SalesDataSampleController::class, 'index'])->name('sales.index');
//  Route::post('/sales', [SalesDataSampleController::class, 'store'])->name('sales.store');
// Route::post('/sales', function(Request $request){
//     return 'ok';
// })->name('sales.store');
// Route::delete('/sales', [SalesDataSampleController::class, 'destroy'])->name('sales.destroy');
// Route::put('/sales', [SalesDataSampleController::class, 'update'])->name('sales.update');





