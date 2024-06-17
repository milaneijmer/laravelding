@extends('layout');
@section('content');

<h1>Manage Attracties</h1>

<h2>Toevoegen</h2>
<form action="{{ route('attracties.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="naam">Naam:</label><br>
    <input type="text" id="naam" name="naam"><br>
    <label for="beschrijving">Beschrijving:</label><br>
    <textarea id="beschrijving" name="beschrijving"></textarea><br>
    <label for="fotopad">Foto:</label><br>
    <input type="file" id="fotopad" name="fotopad"><br>
    <label for="lengte">Lengte:</label><br>
    <input type="number" id="lengte" name="lengte"><br>
    <label for="snelheid">Snelheid:</label><br>
    <input type="number" id="snelheid" name="snelheid"><br>
    <label for="gkracht">GKracht:</label><br>
    <input type="number" id="gkracht" name="gkracht"><br>
    <input type="submit" value="Add Attractie">
</form>

<h2>Verwijderen</h2>
@foreach($attracties as $attractie)
    <div>
        <p>{{ $attractie->naam }}</p>
        <form action="{{ route('attracties.destroy', ['attractie' => $attractie->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete Attractie">
        </form>
    </div>
@endforeach

@endsection;