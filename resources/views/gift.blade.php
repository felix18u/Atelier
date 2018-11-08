@extends('default')


@section('title')
    gift name
@endsection


@section('link')
    <link rel="stylesheet" href="{{ asset('/css/gift.css') }}">
@endsection

@section('content')
    @foreach($gifts as $gift)
        <div class="container">
            <h1 class="title text-center">{{$gift->id}} - {{$gift->nom}}</h1>
        </div>


        <div class="container">
            <div class="grid-container">
                <img class="grid-img" src="/img/{{$gift->img}}">
                <p class="grid-descr">Description : {{$gift->descr}}</p>
                <p class="grid-cat_id">Catégorie : {{ $cat[0]->nom }} ({{$gift->cat_id}}) </p>
                <p class="grid-prix">Prix : {{$gift->prix}}€</p>
            </div>
            <a href="{{ URL::previous() }}"><button type="button" class="btn btn-secondary">Retour</button></a>
        </div>
    @endforeach
    
@endsection
