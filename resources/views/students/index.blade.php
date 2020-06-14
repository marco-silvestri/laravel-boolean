@extends('layouts.main')

@section('main-content')

    <h1>I nostri studenti dopo il corso</h1>
    <div class="students-filter">
        
        <select name="filter" id="filter">
            @foreach ($genders as $gender)
                <option value="{{ $gender }}">    
                @if ($gender == 'm') Uomo @elseif ($gender == 'f') Donna @else Tutti @endif
            </option>
            @endforeach
        </select>
    </div>

    <div class="student-container">   
    {{-- THIS IS NOW HANDLED BY JS
        @foreach ($students as $student) 
    <a href="{{ route('students.show', ['slug'=> $student['slug']]) }}" class="student">
            <img src="{{ $student['img'] }}" alt="{{ $student['nome'] }}">
            <div class="info">
                <h3>{{ $student['nome'] }} ({{ $student['eta'] }})</h3>
                <h4>Assunt{{ ($student['genere'] == 'm') ? 'o' : 'a' }} da {{ $student['azienda'] }} come {{ $student['ruolo'] }}</h4>
            </div>
        <p>{{ $student['descrizione'] }}</p>
    </a>
    @endforeach --}}
    </div>
@endsection

@include('shared.handlebars.student')

@section('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
