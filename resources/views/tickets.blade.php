@extends('layout')

@section('content')
    <div class="form-container">
        <h1>Prijzen</h1>
            @if (session('success'))
        <div class="alert alert-success" style="color: green">
            {{ session('success') }}
        </div>
    @endif
        @if ($errors->any())
    <div class="alert alert-danger" style="color: red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="/tickets/verstuur">
    @csrf
    <div>
        <label for="Naam" class="form-label">Naam</label>
        <input type="text" name="Naam" id="Naam" class="form-input" required>
    </div>
    <div>
        <label for="Email" class="form-label">Email</label>
        <input type="email" name="Email" id="Email" class="form-input" required>
    </div>
    <div>
        <label for="Telefoonnummer" class="form-label">Telefoonnummer</label>
        <input type="text" name="Telefoonnummer" id="Telefoonnummer" class="form-input" required>
    </div>
    <table class="form-table">
        <tr>
            <th>Soort ticket</th>
            <th>Prijs</th>
            <th>Aantal</th>
        </tr>
        @foreach ($tickets as $ticket)
            <tr>
                <td>{{ $ticket->Soort }}</td>
                <td>{{ $ticket->Prijs }}</td>
                <td><input type="number" name="tickets[{{ $ticket->id }}]" class="form-input" min="0" max="15"></td>
            </tr>
        @endforeach
    </table>
    <button type="submit" class="form-button">Bestel</button>
</form>

    <style>
        .form-container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .form-input, .form-button, .form-table {
            max-width: 500px;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        .form-input {
            background-color: #f2f2f2;
            border: 2px solid #ccc;
        }
        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #333;
            margin-bottom: 5px;
        }
        .form-button {
            background-color: #FFD700;
            color: white;
            border: none;
            cursor: pointer;
        }
        .form-table {
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }
        .form-table th, .form-table td {
            padding: 10px;
            text-align: left;
        }
        .form-table td input[type="number"] {
            width: 50px;
        }
        .error-message {
            color: red;
            font-size: 12px;
        }
        .alert {
            padding: 10px;
            margin-top: 10px;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }
        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
        @media (max-width: 600px) {
            .form-container {
                padding: 10px;
            }
            .form-input, .form-button {
                padding: 5px;
            }
            .form-table th, .form-table td {
                padding: 5px;
            }
        }
    </style>
@endsection