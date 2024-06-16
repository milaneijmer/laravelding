@extends("layout")
@section("content")
<div id="tijdLijst">
    <div class="tijden">
    <h1>Tijden</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Dag</th>
                <th>Tijden</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>Maandag</td><td>10:00 - 18:00</td></tr>
            <tr><td>Dinsdag</td><td>10:00 - 18:00</td></tr>
            <tr><td>Woensdag</td><td>10:00 - 18:00</td></tr>
            <tr><td>Donderdag</td><td>10:00 - 18:00</td></tr>
            <tr><td>Vrijdag</td><td>10:00 - 18:00</td></tr>
            <tr><td>Zaterdag</td><td>10:00 - 20:00</td></tr>
            <tr><td>Zondag</td><td>10:00 - 20:00</td></tr>
        </tbody>
    </table>
    </div>
</div>
<style>
#tijdLijst {
    display: flex;
    justify-content: center;
    padding-top: 100px;
}

.tijden {
    width: 50%;
}

.tijden table {
    width: 100%;
    font-size: 20px;
    border-collapse: collapse;
    margin-bottom: 50px;
}

.tijden table, .tijden th, .tijden td {
    border: 1px solid black;
}

.tijden th, .tijden td {
    padding: 15px;
    text-align: left;
}

.tijden tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}
    </style>
</html>
@endsection