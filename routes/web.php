<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tshirt;


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

Route::get('/tshirts', function() {

    $tshirts = Tshirt::all();
    return view('index', compact('tshirts') );
});


Route::get('/tshirts/{id}', function($id) {

    $tshirts = Tshirt::find($id);
    return view('show', compact('tshirts') );
});