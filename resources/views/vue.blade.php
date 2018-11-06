@extends('default')


@section('title')
    Accueil
@endsection


@section('link')
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
@endsection


@section('content')
    <div class="container">
        <h1 class="display-3">My Gift Box</h1>
    </div>

    <div class="container">
        <div class="grid-container">
            <button class="grid-item grid-item1" href="#">Toutes les catégories</button>
            <button class="grid-item grid-item" href="#">Restauration</button>
            <button class="grid-item grid-item" href="#">Hébergement</button>
            <button class="grid-item grid-item" href="#">Attention</button>
            <button class="grid-item grid-item" href="#">Activité</button>
        </div>
    </div>
@endsection

