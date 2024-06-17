@extends("layout")
@section("content")
<div class="accomodaties">
    @foreach($accomodaties as $accomodatie)
        <a href='/accomodaties/{{$accomodatie->id}}'><div class="accomodatie">
            <h1>{{ $accomodatie->Soort_Kamer }}</h1>
            <img src="{{Vite::asset($accomodatie->FotoPad)}}" alt="{{ $accomodatie->Naam }}" class="accomodatieFoto">
            <h1>€{{ $accomodatie->Prijs}} Per nacht</h1>
        </div></a>
    @endforeach
</div>
<style>
    .accomodatieFoto {
        width: 450px;
        height: 450px;
    }
    .accomodatie{
        margin: 20px;
        padding: 5px;
        display: inline-block;
        background-color: #eaeaea;
        border-radius: 10px;
        box-shadow: 10px 10px 10px rgba(0,0,0,0.2);
        color: #333;
        box-sizing: border-box;
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