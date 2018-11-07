@extends('default')


@section('title')
    Accueil
@endsection


@section('link')
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
@endsection


@section('content')
    <div class="container">
        <h1 class="display-3 text-center">My Gift Box</h1>
    </div>

    <div class="container">
        <div class="grid-container">
            <a href="/catalog/all" class="grid-item grid-item1"><h1 class="text-center">Toutes les catégories</h1></a>
            <a href="/catalog/category/1" class="grid-item "><h1 class="text-center">Attention</h1></a>
            <a href="/catalog/category/2" class="grid-item "><h1 class="text-center">Activité</h1></a>
            <a href="/catalog/category/3" class="grid-item "><h1 class="text-center">Restauration</h1></a>
            <a href="/catalog/category/4" class="grid-item "><h1 class="text-center">Hébergement</h1></a>
        </div>
    </div>
@endsection

