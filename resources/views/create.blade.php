@extends('layout')

@section('title', 'create new tshirts')

@section('main')

    <form method ="POST" action="/tshirts">
    @csrf
    <input class="border border-black m-4" type="text" name="name" placeholder="Nom" >
    <input class="border border-black m-4" type="number" name="price" placeholder="Prix">
    <input class="border border-black m-4" type="text" name="places" placeholder="Lieu_Fabrication">
    <input class="border border-black m-4" type="text" name="size" placeholder="Taille">
    <input class="border border-black m-4" type="text" name="brand" placeholder="marque">
    <input class="border border-black m-4" type="text" name="color" placeholder="couleur">
    <input class="border border-black m-4" type="date" name="fabrication">
    <button class="bg-blue-500 px-8 py-2">Valider</button>
    </form> 

@endsection

