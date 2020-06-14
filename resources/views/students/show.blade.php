@extends('layouts.main')

@section('main-content')

<h1>{{ $student['nome'] }}</h1>

<div class="student">
    <div class="card"> 
        <div class="card-body">
        <img src="{{ $student['img'] }}" alt="{{ $student['nome'] }}">
            <div class="info">
                <h3 class="card-title">{{ $student['nome'] }} ({{ $student['eta'] }} anni)</h3>
                <h4 class="card-subtitle">Assunt{{ ($student['genere'] == 'm') ? 'o' : 'a' }} da {{ $student['azienda'] }} come {{ $student['ruolo'] }}</h4>
                <h5>{{ $student['descrizione'] }}</h5>
                <a href="{{ $student['linkedin'] }}">Trovami su LinkedIn</a>
            </div>
        </div>
    </div>
</div>

@endsection