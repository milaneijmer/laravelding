@extends("layout")

@section("content")
<div class="attractie-detail">
    <img src="{{Vite::asset($attractie->FotoPad)}}" alt="{{ $attractie->Naam }}" class="attractie-image">
    <h1 class="attractie-title">{{$attractie->Naam}}</h1>
    <p class="attractie-description">{{$attractie->Beschrijving}}</p>
    <ul class="attractie-specs">
        <li><strong>Lengte:</strong> {{$attractie->Lengte}}</li>
        <li><strong>Snelheid:</strong> {{$attractie->Snelheid}}</li>
        <li><strong>G-Kracht:</strong> {{$attractie->GKracht}}</li>
    </ul>
</div>

<style>
    .attractie-detail {
    width: 80%;
    margin: auto;
    background-color: #f9f9f9;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
}

.attractie-image {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

.attractie-title {
    font-size: 2.5em;
    margin-top: 1em;
    color: #333;
}

.attractie-description {
    font-size: 1.2em;
    margin-top: 0.5em;
    color: #666;
    line-height: 1.6;
}

.attractie-specs {
    list-style-type: none;
    padding: 0;
    margin-top: 1em;
}

.attractie-specs li {
    font-size: 1em;
    margin-top: 0.2em;
    color: #333;
}

.attractie-specs li strong {
    color: #666;
}
</style>
@endsection