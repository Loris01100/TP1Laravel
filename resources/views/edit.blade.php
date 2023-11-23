<form method="post" action="/tshirts/{{ $tshirts->id }}">
    @csrf
    @method('PATCH')

     <input class="border border-black m-4" type="text" name="name" placeholder="Nom" value="{{ $tshirts->name }}" >
    <input class="border border-black m-4" type="number" name="price" placeholder="Prix" value="{{ $tshirts->price }}">
    <input class="border border-black m-4" type="text" name="places" placeholder="Lieu_Fabrication" value="{{ $tshirts->places }}">
    <input class="border border-black m-4" type="text" name="size" placeholder="Taille" value="{{ $tshirts->size }}">
    <input class="border border-black m-4" type="text" name="brand" placeholder="marque" value="{{ $tshirts->brand }}">
    <input class="border border-black m-4" type="text" name="color" placeholder="couleur" value="{{ $tshirts->color }}">
    <input class="border border-black m-4" type="date" name="fabrication" value="{{ $tshirts->fabrication }}">
    <button class="bg-blue-500 px-8 py-2">Valider</button>
    
        <button type="submit">Mettre à jour</button>
</form>
