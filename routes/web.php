<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', [PizzaController::class, 'index']);
Route::get('/pizzas/create', [PizzaController::class,'create']);
Route::post('/pizzas', [PizzaController::class, 'store']);
Route::get('/pizzas/{id}', [PizzaController::class, 'show']);
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy']);



//user_log.php
//<?php
//Route::post('/api/user_log', 'API\Info\UserLogController@user_log');
//Route::post('/api/upload/user_log', 'API\Upload\UserLogUploadController@upload');
//Route::get('/api/download/user_log', 'API\Download\UserLogDownloadController@download');

//Route::any('/api/user_log/{APIName}','API\Info\UserLogController@Route');
//?>
