@extends('layout')
@section('content')

<h1>Manage Accomodaties</h1>

<h2>Toevoegen</h2>
<div class="form-container">
<form action="{{ route('accomodaties.store') }}" method="POST" enctype="multipart/form-data" class="add-form">
    @csrf
    <div class="form-group">
    <label for="soort_kamer">Soort Kamer:</label>
    <input type="text" id="soort_kamer" name="soort_kamer">
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
    <label for="prijs">Prijs:</label>
    <input type="number" id="prijs" name="prijs">
    </div>
    <div class="form-group">
    <input type="submit" value="Add Accomodaties" class="btn btn-primary">
</form>
</div>
<div style="margin: 0 auto;">
<h2 style="margin: 0 auto;">Verwijderen</h2>
@foreach($accomodaties as $accomodatie)
    <div class="card">
        <h5 class="card-title">{{ $accomodatie->Soort_Kamer }}</h5>
        <form action="{{ route('accomodaties.destroy', ['accomodatie' => $accomodatie->id]) }}" method="POST" class="card-action">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endforeach
</div>

<style>
    .form-container {
    margin-bottom: 20px; /* Adjust the value as needed */
}
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