@if($tshirts)
    <p>Name :{{ $tshirts->name}}</p>
    <p>Price :{{ $tshirts->price}}</p>
    <p>Places of fabrication :{{ $tshirts->places}}</p>
    <p>Size :{{ $tshirts->size}}</p>
    <p>Brand :{{ $tshirts->brand}}</p>
    <p>Color :{{ $tshirts->color}}</p>
    <p>Fabrication :{{ $tshirts->fabrication}}</p>
@else
    <p>Aucun enregistrement trouvé pour cet ID.</p>
@endif
