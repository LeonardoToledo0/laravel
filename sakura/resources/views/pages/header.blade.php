@extends('layouts.app')

@section('content')
<header>
    <div class="site menu-header">
        <div class="logo">
            <img src="{{ asset('images/sakura.svg') }}" alt="">
        </div>
        <nav class="lista-menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Reserva</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
        <div class="tema">
            <img class="lua" src="{{ asset('images/lua.png') }}" alt="">
            <img class="sol" src="{{ asset('images/sol.png') }}" alt="">
        </div>
    </div>
</header>

@yield('banner')


@endsection