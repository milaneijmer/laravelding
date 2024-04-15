@extends("layout")
@section("content")
<div class="index">
    <div class="textachtergrond">
    <h1>Welkom bij Legoland Doetinchem!</h1>
    <p>De plek waar je de leukste attracties vindt en de mooiste creaties kunt maken.</p>
    <p>Op deze website vind je alle informatie over de attracties, de openingstijden en kun je contact met ons opnemen.</p>
    </div>
</div>
@endsection
<style>
    html
    {
        background-image: url("{{ Vite::asset('resources/images/legobackground.jpg')}}");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .index
    {
        display: flex;
        align-items: center;
        flex-direction: column;
        margin-top: 100px;
        font-size: 20px;    
        color: white;
    }
    p, h1
    {
        margin: 0px;
        text-shadow: 2px 2px 2px black;
        width: 100%;
        text-align: center;
    }
    .textachtergrond
    {
        background-color: red;
        box-shadow: 10px 10px 10px black;
    }
</style>