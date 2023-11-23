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

//index
Route::get('/tshirts', function() {

    $tshirts = Tshirt::all();
    return view('index', compact('tshirts') );
});

//create
Route::get('/tshirts/create', function() {

    return view('create');
});

//store
Route::post('/tshirts', function() {
    $tshirt = new Tshirt;
    $tshirt->name = request('name');
    $tshirt->price = request('price');
    $tshirt->places = request('places');
    $tshirt->size = request('size');
    $tshirt->brand = request('brand');
    $tshirt->color = request('color');
    $tshirt->fabrication = request('fabrication');
    $tshirt->save();
    return redirect('/tshirts/'. $tshirt->id);
});

//show
Route::get('/tshirts/{id}', function($id) {

    $tshirts = Tshirt::find($id);
    return view('show', compact('tshirts') );
});

//edit 
//Chercher une ressource spécifique
//Renvoyer une vue présentant un formulaire dédition
Route::get('/tshirts/{id}/edit', function($id) {

    $tshirts = Tshirt::find($id);
    return view('edit', compact('tshirts'));
});

//update 
//Traiter les données du formulaire et mettre à jour les ressources 

Route::patch('/tshirts/{id}', function($id) {
    $tshirt = Tshirt::find($id);
			$tshirt->name = request('name');
			$tshirt->price = request('price');
			$tshirt->places = request('places');
            $tshirt->size = request('size');
			$tshirt->brand = request('brand');
			$tshirt->color = request('color');
            $tshirt->fabrication = request('fabrication');
			$tshirt->save();
            return redirect('/tshirts/'. $tshirt->id);

});

//destroy 
//Supprimer la ressource de la BDD

Route::delete('/tshirts/{id}', function($id) {

    $tshirt = Tshirt::find($id);
    $tshirt->delete();
    return redirect('/tshirts');

});