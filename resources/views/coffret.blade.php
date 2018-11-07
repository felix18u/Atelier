@extends('default')


@section('title')
    Accueil
@endsection


@section('link')
    <link rel="stylesheet" href="{{ asset('/css/coffret.css') }}">
@endsection


@section('content')
<div class="container">
        <h1 class="display-3 text-center">Coffret</h1>
    </div>

    <div class="container">                             
        <div class="grid-vertical">
            <div class="grid-coffret">
                <h2>Nom de l'article</h2>
                <p>Liste des prestation(nom)</p>
                <p>Prix du coffret</p>
            </div>

            <div class="grid-coffret">
                <h2>Nom de l'article</h2>
                <p>Liste des prestation(nom)</p>
                <p>Prix du coffret</p>
            </div>

            <div class="grid-coffret">
                <h2>Nom de l'article</h2>
                <p>Liste des prestation(nom)</p>
                <p>Prix du coffret</p>
            </div>
        </div>
    </div>
@endsection