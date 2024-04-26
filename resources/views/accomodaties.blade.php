@extends("layout")
@section("content")
<div class="accomodaties">
    @foreach($accomodaties as $accomodatie)
        <a href="/attracties"><div class="accomodatie">
            <h1>{{ $accomodatie->Soort_Kamer }}</h1>
            <p>{{ $accomodatie->Beschrijving }}</p>
            <img src="{{Vite::asset($accomodatie->FotoPad)}}" alt="{{ $accomodatie->Naam }}" class="accomodatieFoto">
            <h1>€{{ $accomodatie->Prijs}} Per nacht</h1>
        </div></a>
    @endforeach
</div>
<style>
    .accomodatieFoto {
        width: 400px;
        height: 400px;
    }
    .accomodatie{
        /*margin: 20px;
        padding: 5px;*/
        border: 1px solid black;
        display: inline-block;
        background-color: red;
        color: white;
        text-shadow: 2px 2px 2px black;
        box-shadow: 3px 3px 3px black;;
        margin-left: 5px;
    }
    .accomodaties{
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        justify-content: space-between;
        gap: 10px;
    }
</style>
@endsection