<!-- pages.home.blade.php -->

@extends('layouts.app')

@section('content')
{{-- Inicio do Header --}}
<header>
    <div class="menu-header">
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

{{-- Inicio Banner --}}
<section class="banner">
    <img src="{{ asset('images/cinza.png') }}" alt="">
    <img src="{{ asset('images/preto.png') }}" alt="">
    <img src="{{ asset('images/cinza.png') }}" alt="">
    <img src="{{ asset('images/preto.png') }}" alt="">
</section>

{{--Inicio Sobre --}}
<section class="sobre">
    <div class=" site sobre-titulo">
        <hr class="h1">
        <h2>Sobre</h2>
        <hr class="h2">
    </div>
    <div class="sobre-content">
        <div class="sobre-texto"><img src="{{ asset('images/fundocomida.png') }}" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro aliquam adipisci totam quia, sunt nemo
                sed velit quis ea suscipit magni iste cumque, necessitatibus voluptatum, non impedit. Voluptates, ipsam
                molestias?</p><a href="#">Ver Mais</a>
        </div>
        <div class="sobre-comida"><img src="{{ asset('images/comida.png') }}" alt=""></div>
        <div><img src="{{ asset('images/comida.png') }}" alt=""></div>
    </div>
    <div class="sobre-faixa"></div>
    <div class="spbre-foto"><img src="{{ asset('images/bannersobre.png') }}" alt=""></div>
</section>

{{-- Inicio Menu --}}
<div class=" site sobre-titulo">
    <hr class="h1">
    <h2>Menu</h2>
    <hr class="h2">
</div>
<section class="menu">
    <div class="menu-container">
        <div class="menu-card">
            <div class="menu-imgBx">
                <img src="{{asset('images/prato.png')}}" alt="">
            </div>
            <div class="menu-contentBx">
                <h2>Prato</h2>
                <a href="#">Reservar</a>
            </div>
        </div>
        <div class="menu-card">
            <div class="menu-imgBx">
                <img src="{{asset('images/prato.png')}}" alt="">
            </div>
            <div class="menu-contentBx">
                <h2>Prato</h2>
                <a href="#">Reservar</a>
            </div>
        </div>

    </div>

</section>


@endsection