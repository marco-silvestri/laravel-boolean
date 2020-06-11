<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Boolean</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;700&display=swap" rel="stylesheet"> 
</head>
<body>
    <header class="main-header">
        <nav class="navbar">
            <a href="{{ route('static-page.home') }}" class="navbar-brand">
                <img src="https://www.boolean.careers/images/common/logo.png" alt="Boolean Logo">
            </a>
            <ul>
                <li><a @if ((Request::route()->getName()) == 'static-pages.home') class="active" @endif href="{{ route('static-page.home') }}">Home</a></li>
                <li><a href="">Corso</a></li>
                <li><a @if ((Request::route()->getName()) == 'students.index') class="active" @endif href="{{ route('students.index') }}">Dopo il corso</a></li>
                <li><a href="">Lezione gratuita</a></li>
                <li><a href="">Candidatura</a></li>
            </ul>
        </nav>
    </header>