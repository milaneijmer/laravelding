@extends("layout")
@section("content")
    
    <div class="contactform">
        <h1>Contact</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="/contact/verstuur">
            @csrf
        <div class="form-group">
            <input type="text" name="Naam" placeholder="Naam" required>
            @error('Naam')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" name="Email" placeholder="Email" required>
            @error('Email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <textarea class="bericht" name="Bericht" id="" cols="30" rows="10" placeholder="Bericht" required></textarea>
            @error('Bericht')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="submit-btn">Verzenden</button>
    </form>
    </div>
    <style>
        
        .contactform {
            display: flex;
            flex-direction: column;
            width: 50%;
            margin: 0 auto;
            align-items: center;
            padding: 20px;
            border-radius: 10px;
        }
        .form-group {
        width: 100%;
        margin-bottom: 20px;
    }
    .form-group input, .form-group textarea {
        max-width: 500px;
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
        box-sizing: border-box;
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
        .submit-btn {
            padding: 10px 20px;
            background-color: #ffc107; /* Changed to yellow */
            color: black; /* Changed to black for better contrast */
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }
        .submit-btn:hover {
            background-color: #e0a800; /* Darker shade of yellow */
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
    </style>
@endsection