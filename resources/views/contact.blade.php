@extends("layout")
@section("content")
    
    <div class="contactform">
        <h1>Contact</h1>
        <div  class="test">
        <form method="POST" action="/contact/verstuur">
            @csrf
        <div class="naamform"><input type="text" name="Naam" placeholder="Naam"></div>
        <div class="emailform"><input type="text" name="Email" placeholder="Email"></div>
        <div class="berichtform"><textarea class="bericht" name="Bericht" id="" cols="30" rows="10" placeholder="Bericht"></textarea></div>
        <button type="submit">Verzenden</button>
    </form>
    </div>
    </div>
    <style>
        .contactform{
            display: flex;
            flex-direction: column;
            width: 100%;
            margin: 0 auto;
            align-items: center;
        }
        input, textarea{
            margin: 10px;
            padding: 5px;
        }
        button{
            margin: 10px;
            padding: 5px;
        }
       .bericht
        {
            resize: none;
        }
    </style>
@endsection