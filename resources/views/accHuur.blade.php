@extends("layout")
@section("content")
        <div class="accomodatie">
            <h1>{{ $accomodatie = DB::table('accomodaties')->where('id', input('parameter'))->first()->Soort_Kamer }}</h1>
            <img src="{{Vite::asset($accomodatie = DB::table('accomodaties')->where('id', 1)->first()->FotoPad)}}" alt="" class="accomodatieFoto"> 
            <p>{{ $accomodatie = DB::table('accomodaties')->where('id', 1)->first()->Beschrijving }}</p>
        </div>
</div>
<style>
    .accomodatieFoto {
        width: 450px;
        height: 450px;
    }
    .accomodatie{
        margin: 20px;
        padding: 5px;
        border: 1px solid black;
        display: inline-block;
        background-color: red;
        color: white;
        text-shadow: 2px 2px 2px black;
        box-shadow: 3px 3px 3px black;;
        margin-left: 5px;
    }
</style>
@endsection