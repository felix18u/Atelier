@extends('default')


@section('title')
    Accueil
@endsection


@section('link')
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
@endsection


@section('content')
    <div class="container">
        <h1 class="title text-center">My Gift Box</h1>
    </div>

<div class="container">
    <div class="wrapper">     
        <a href="/catalog/all" class="header text-center"><p>Toutes les catégories</p></a>
        <a href="/catalog/category/1" class="panel text-center"><p>Attention</p></a>
        <a href="/catalog/category/2" class="panel text-center"><p>Activité</p></a>
        <a href="/catalog/category/3" class="panel text-center"><p>Restauration</p></a>
        <a href="/catalog/category/4" class="panel text-center"><p>Hébergement</p> </a>  
    </div>
</div>

@endsection

