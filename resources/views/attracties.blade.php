@extends("layout")
@section("content")

@if (count($attracties) > 0)
<div class="attracties">
    @foreach($attracties as $attractie)
    <a href="/attracties/{{$attractie->id}}" class="attractie">
        <div class="attractieFoto">
            <img src="{{Vite::asset($attractie->FotoPad)}}" alt="{{ $attractie->Naam }}" class="attractieFotoImg">
        </div>
        <h2>{{ $attractie->Naam }}</h2>
    </a>
    @endforeach
</div>
@else
    <p>Geen attracties gevonden.</p>
@endif

<style>
.attracties {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
    margin: -10px auto; /* half of the gap and auto for horizontal centering */
    max-width: 1200px; /* adjust as needed */
}

.attractie {
    flex: 1 0 100%; /* grow, shrink, basis */
    background-color: #f9f9f9;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
    margin: 10px; /* half of the gap */
    text-decoration: none;
    color: #333;
    box-sizing: border-box;
    max-width: 100%;
}

.attractieFoto {
    height: 200px; /* adjust as needed */
    overflow: hidden;
}

.attractieFotoImg {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
}

/* Tablet */
@media (min-width: 600px) {
    .attractie {
        flex: 1 0 calc(50% - 20px); /* grow, shrink, basis */
        max-width: calc(50% - 20px);
    }
}

/* Desktop */
@media (min-width: 900px) {
    .attractie {
        flex: 1 0 calc(33.33% - 20px); /* grow, shrink, basis */
        max-width: calc(33.33% - 20px);
    }
}
</style>

@endsection