@extends("layout")
@section("content")
<div class="ticketform">
    <h1>Tickets</h1>
        <form action="/tickets/verstuur" method="POST">
        @csrf
        <input type="text" name="Naam" placeholder="Naam">
        <input type="text" name="Email" placeholder="E-mailadres">
        <input type="text" name="Telefoonnummer" placeholder="Telefoonnummer">
        <div class="soortTicket">
        @foreach($tickets as $ticket)
            {{ $ticket->Soort }} €{{ $ticket->Prijs }}  
            <input type="number" name="tickets[{{ $ticket->id }}]">
        @endforeach
        </div>
        <div class="knopdiv">
        <button class="knop" type="submit">Bestellen</button>
        </div>
        </form>
</div>
<style>
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
        align-items: center;
    }
</style>
@endsection