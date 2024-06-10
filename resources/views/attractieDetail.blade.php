@extends("layout")

@section("content")
<div class="attractie-detail">
    <div class="attractie-image-container">
        <img src="{{Vite::asset($attractie->FotoPad)}}" alt="{{ $attractie->Naam }}" class="attractie-image">
    </div>
    <div class="attractie-info">
        <h1 class="attractie-title">{{$attractie->Naam}}</h1>
        <p class="attractie-description">{{$attractie->Beschrijving}}</p>
        <ul class="attractie-specs">
            <li><strong>Lengte:</strong> {{$attractie->Lengte}}m</li>
            <li><strong>Snelheid:</strong> {{$attractie->Snelheid}}km/h</li>
            <li><strong>G-Kracht:</strong> {{$attractie->GKracht}}g</li>
        </ul>
    </div>
</div>
<style>
.attractie-detail {
    display: flex;
    align-items: center;
    width: 100%;
    margin: auto;
    background-color: #eaeaea;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
    box-sizing: border-box;
}
.attractie-image-container {
    flex: 1;
    margin-right: 10px;
}
.attractie-info {
    flex: 1;
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
    /* padding: 10px */
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