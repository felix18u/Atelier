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
                <h2>TEST</h2>
                <p class='date'>date</p>
                <p class='etat'>etat</p>
                <p class='montant'>montant</p>
                <p class='message'>MESSSAAAAAAGEEEE</p>
                <p class='url'>url</p>
                <p class='remerciement'>I'm thanking you</p>
            </div>
        @foreach($coffret as $coffret)
            <div class="grid-coffret">
                <h2>TEST{{$coffret->nom}}</h2>
                <p class='date'>TEST {{$coffret->date}}</p>
                <p class='etat'>TEST {{$coffret->etat}}</p>
                <p class='montant'>TEST {{$coffret->montantTotal}}</p>
                <p class='message'>TEST {{$coffret->message}}</p>
                <p class='url'>TEST {{$coffret->url}}</p>
                <p class='remerciement'>TEST {{$coffret->remerciement}}</p>
            </div>
        @endforeach
        </div>
    </div>
@endsection