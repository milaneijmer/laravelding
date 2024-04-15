@extends("layout")
@section("content")
<div id="tijdLijst">
    <div class="tijden">
    <h1>Tijden</h1>
    <p>Maandag: 10:00 - 18:00</p>
    <p>Dinsdag: 10:00 - 18:00</p>
    <p>Woensdag: 10:00 - 18:00</p>
    <p>Donderdag: 10:00 - 18:00</p>
    <p>Vrijdag: 10:00 - 18:00</p>
    <p>Zaterdag: 10:00 - 20:00</p>
    <p>Zondag: 10:00 - 20:00</p>
    </div>
</div>
</body>
<style>
        #tijdLijst
        {
            display: flex;
            text-align: center;
            justify-content: center;
            padding-top: 100px;
            font-size: 20px;
        }
        .tijden
        {
            background-color: red;
            color: white;
            text-shadow: 2px 2px 2px black;
            box-shadow: 3px 3px 3px black;
        }
    </style>
</html>
@endsection