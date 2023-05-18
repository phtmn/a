<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/products/create',[ProductsController::class,'create']);
Route::post('/products/store',[ProductsController::class,'store']);
Route::get('/',[ProductsController::class,'index']);
Route::get('/products/{id}',[ProductsController::class,'show']);
Route::delete('/products/{id}',[ProductsController::class,'destroy']);
Route::get('/products/edit/{id}',[ProductsController::class,'edit']);
Route::put('/products/update/{id}',[ProductsController::class,'update']);


