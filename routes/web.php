<?php

use App\Http\Controllers\DataHandleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LayoutController;
use Illuminate\Support\Facades\Route;

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


Route::get('',[LayoutController::class,'masterLayout']);
Route::get('/form',[LayoutController::class,'create']);
Route::get('/list',[LayoutController::class,'list']);

Route::prefix('/admin/events')->group(function (){
    Route::get('/create',[EventController::class,'create']);
    Route::get('/list',[EventController::class,'list']);
    Route::post('/create',[EventController::class,'store']);
    Route::get('/update/{id}',[EventController::class,'update']);
    Route::post('/update/{id}',[EventController::class,'save']);
    Route::get('/delete/{id}',[EventController::class,'destroy']);
});



Route::get('/demo/validate/create', [\App\Http\Controllers\DemoValidateController::class, 'create']);
Route::post('/demo/validate/store', [\App\Http\Controllers\DemoValidateController::class, 'store']);



