@extends('layout')
@section('content')

<h1>Manage Attracties</h1>

<h2>Toevoegen</h2>
<form action="{{ route('attracties.store') }}" method="POST" enctype="multipart/form-data" class="add-form">
    @csrf
    <div class="form-group">
    <label for="naam">Naam:</label>
    <input type="text" id="naam" name="naam">
    </div>
    <div class="form-group">
    <label for="beschrijving">Beschrijving:</label>
    <textarea id="beschrijving" name="beschrijving"></textarea>
    </div>
    <div class="form-group">
    <label for="fotopad">Foto:</label>
    <input type="file" id="fotopad" name="fotopad">
    </div>
    <div class="form-group">
    <label for="lengte">Lengte:</label>
    <input type="number" id="lengte" name="lengte">
    </div>
    <div class="form-group">
    <label for="snelheid">Snelheid:</label>
    <input type="number" id="snelheid" name="snelheid">
    </div>
    <div class="form-group">
    <label for="gkracht">GKracht:</label>
    <input type="number" id="gkracht" name="gkracht">
    </div>
    <input type="submit" value="Add Attractie" class="btn btn-primary">
</form>
<div style="margin: 0 auto;">
<h2 style="margin: 0 auto;">Verwijderen</h2>
@foreach($attracties as $attractie)
    <div class="card">
        <h5 class="card-title">{{ $attractie->Naam }}</h5>
        <form action="{{ route('attracties.destroy', ['attractie' => $attractie->id]) }}" method="POST" class="card-action">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endforeach
</div>

<style>
    .card {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1em;
    width: 50%;
    margin-bottom: 1em;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin: 0 auto;
}

.card-title {
    margin: 0;
}

.btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
}
h2 {
    text-align: center;
}
h1 {
    text-align: center;
}

.form-group {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1em;
}

.form-group label {
    margin-right: 1em;
}

.add-form {
    max-width: 600px;
    margin: 0 auto;
}

.add-form label {
    display: block;
    margin-bottom: 0.5em;
}

.add-form input[type="text"],
.add-form textarea,
.add-form input[type="number"],
.add-form input[type="file"] {
    width: 50%;
    padding: 0.5em;
    margin-bottom: 1em;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: none;
}

.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}
</style>
@endsection