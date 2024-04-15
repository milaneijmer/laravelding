@extends("layout")
@section("content")
@if (count($attracties) > 0)
<div class="attracties">
    
    <! -- Loop over alle attracties en toont ze -->
    @foreach($attracties as $attractie)
    <div class="attractie">
        <h1>{{ $attractie->Naam }}</h1>
        <p>{{ $attractie->Beschrijving }}</p>
        <img src="{{Vite::asset($attractie->FotoPad)}}" alt="{{ $attractie->Naam }}" class="attractieFoto">
    </div>
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
    .attractie{
        margin: 20px;
        padding: 5px;
        border: 1px solid black;
        display: inline-block;
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