<?php

namespace App\Http\Controllers;
use App\Models\Tshirt;

use Illuminate\Http\Request;

class TshirtController extends Controller
{
    //index 
    public function index() {

        $tshirts = Tshirt::all();
        return view('index', compact('tshirts'));
    }

    //show
    public function show($id) {
        $tshirts = Tshirt::find($id);
        return view('show', compact('tshirts') );
    }
    //create
public function create() {
         return view('create');
    }
    //strore
public function store() {
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
    }
    //edit
public function edit($id) {
         $tshirts = Tshirt::find($id);
    return view('edit', compact('tshirts'));
    }
    //update
public function update($id) {
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
    }
    //destroy
    public function destroy($id) {
        $tshirt = Tshirt::find($id);
    $tshirt->delete();
    return redirect('/tshirts');
    }
}
