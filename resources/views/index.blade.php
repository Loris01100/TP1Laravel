<h1>All the tshirts</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Prix</th>
        <th>Place de fabrication</th>
        <th>Taille</th>
        <th>Marque</th>
        <th>Couleur</th>
        <th>Date de fabrication</th>

</tr>

@foreach($tshirts as $tshirt)

<tr>
    <td>{{ $tshirt->id}}</td>
    <td>{{ $tshirt->name}}</td>
    <td>{{ $tshirt->price}}</td>
    <td>{{ $tshirt->places}}</td>
    <td>{{ $tshirt->size}}</td>
    <td>{{ $tshirt->brand}}</td>
    <td>{{ $tshirt->color}}</td>
    <td>{{ $tshirt->fabrication}}</td>
</tr>
 @endforeach

</table>