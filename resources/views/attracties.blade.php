@extends("layout")
@section("content")
@if (count($attracties) > 0)
<div class="attracties">
    
    <! -- Loop over alle attracties en toont ze -->
    @foreach($attracties as $attractie)
    <a href="/attracties/{{$attractie->id}}">
        <div class="attractie">
            <div class="attractieFoto">
                <img src="{{Vite::asset($attractie->FotoPad)}}" alt="{{ $attractie->Naam }}" class="attractieFoto">
            </div>
                <h1>{{ $attractie->Naam }}</h1>
                <p>{{ $attractie->Beschrijving }}</p>
        </div>
    </a>
        @endforeach
</div>
<! -- Als er geen attracties zijn, toont het dan een melding -->
@else
    <p>Geen attracties gevonden.</p>
@endif
<style>
    .attractieFoto {
        width: 300px;
        height: 300px;
    }
    /* .attractieTekst {
        width: 60%;
    } */
    .attractie{
        margin: 20px;
        display: inline-block;
        justify-content: space-around;
        width: 70%;
        padding: 5px;
        border: 1px solid black;
        background-color: red;
        color: white;
        text-shadow: 2px 2px 2px black;
        box-shadow: 3px 3px 3px black;
    }
    .attracties{
        display: flex;
        flex-wrap: wrap;
        width: 100%;
    }
</style>
@endsection