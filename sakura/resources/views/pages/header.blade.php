@extends('layouts.app')


@section('header')
<header class="site">
    <div class="logo">
        <img src="{{ asset('images/sakura.svg') }}" alt="">
    </div>
    <nav class="lista-menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Reserva</a></li>
            <li><a href="#">Contaro</a></li>
        </ul>
    </nav>
    <div class="tema">
        <img class="lua" src="{{ asset('images/lua.png') }}" alt="">
        <img class="sol" src="{{ asset('images/sol.png') }}" alt="">
    </div>

</header>


@endsection