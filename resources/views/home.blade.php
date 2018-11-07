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
            <button class="grid-item grid-item1" href="/catalog/all">Toutes les catégories</button>
            <button class="grid-item grid-item" href="/catalog/category/1">Attention</button>
            <button class="grid-item grid-item" href="/catalog/category/2">Activité</button>
            <button class="grid-item grid-item" href="/catalog/category/3">Restauration</button>
            <button class="grid-item grid-item" href="/catalog/category/4">Hébergement</button>
        </div>
    </div>
@endsection

