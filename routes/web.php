<?php use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesDataSampleController;


Route::resource('/sales', SalesDataSampleController::class);


Route::get('/test', function(){
    $data = ['nombre' => 'juan', 'edad' => 10];
    $json = json_encode($data);
    return $json;
});