@extends('layout')

@section('title', 'Just one tshirt')

@section('main')

<h1>Just one tshirt </h1>

@if($tshirts)
    <p>Name :{{ $tshirts->name}}</p>
    <p>Price :{{ $tshirts->price}}</p>
    <p>Lieu_Fabrication :{{ $tshirts->places}}</p>
    <p>Size :{{ $tshirts->size}}</p>
    <p>Brand :{{ $tshirts->brand}}</p>
    <p>Color :{{ $tshirts->color}}</p>
    <p>Fabrication :{{ $tshirts->fabrication}}</p>
@else
    <p>Aucun enregistrement trouvé pour cet ID.</p>
@endif

<form method ="post" action= "/tshirts/{{ $tshirts->id }}">
    @csrf
    @method("delete")
    <button class="bg-blue-500 px-8 py-2">Supprimer</button>
</form>

@endsection