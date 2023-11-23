<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TshirtController;


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

//index
Route::get('/tshirts', [TshirtController::class, 'index']);

Route::get('/tshirts/{id}', [TshirtController::class, 'show']);


Route::post('/tshirts/create', [TshirtController::class, 'create' ]);


Route::get('/tshirts',  [TshirtController::class, 'store']);

Route::get('/tshirts/{id}/edit',  [TshirtController::class, 'edit']);


Route::patch('/tshirts/{id}',  [TshirtController::class, 'update']);


Route::delete('/tshirts/{id}',  [TshirtController::class, 'destroy']);