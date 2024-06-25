@extends("layout")
@section("content")
        <div class="accomodatie">
            <h1>{{ $accomodaties->Soort_Kamer}}</h1>
            <div class="imgBes">
            <img src="{{Vite::asset($accomodaties->FotoPad)}}" alt="" class="accomodatieFoto"> 
            <p class="beschrijving">{{$accomodaties->Beschrijving}}</p>   
        <form action="/accomodaties/verstuur" method="POST">
        @csrf
        <input type="text" name="Naam" placeholder="Naam">
        <input type="text" name="Email" placeholder="E-mailadres">
        <input type="text" name="Telefoonnummer" placeholder="Telefoonnummer">
        <input type="date" name="Datum" class="">
        <input class="hidden" name="AccomodatiesId" value="{{ $accomodaties->id }}">
        <div class="knopdiv">
        <button class="knop" type="submit">Bestellen</button>
        </div>
            </form> 
        </div>
</div>
<style>
    .hidden
    {
        visibility: hidden;
    }
    .beschrijving
    {
        width: 600px;
        margin:0 auto;
    }
    .imgBes
    {
        display: flex;
        flex-direction: row;
    }
    .accomodatieFoto 
    {
        width: 450px;
        height: 450px;
        padding-right: 10px;
    }
    .accomodatie
    {
        flex: 1 0 100%;
        width: 900px;
        margin: 20px;
        padding: 5px;
        display: inline-block;
        background-color: #eaeaea;
        border-radius: 10px;
        box-shadow: 10px 10px 10px rgba(0,0,0,0.2);
        color: #333;
        margin-left: 5px;
        display: flex;
        flex-direction: column;
    }
    .ticketform{
        display: flex;
        flex-direction: column;
        width: 100%;
        margin: 0 auto;
        align-items: center;
        flex-wrap: wrap;
    }
    .soortTicket
    {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    input{
        margin: 10px;
        padding: 5px;
    }
    .knop{
        margin: 10px;
        padding: 5px;
    }
    .knopdiv{
        display: flex;
        flex-direction: column;
    }
</style>
@endsection