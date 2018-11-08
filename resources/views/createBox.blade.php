@extends('default')

@section('title')
    Création de coffret
@endsection


@section('link')
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1 class="title text-center">Nouveau coffret</h1>
    </div>
    
    <div class="container">
        <div class="form">
        <form method="POST" action="">
            {{ csrf_field() }}
            <label for="name"> Nom du coffret :</label>
            <br>
            <input type="text" name="name" id="name" required/>
            <br>
            <label for="date">Date d'ouverture du coffret (facultatif) :</label>
            <br>
            <input type="date" name="date" id="date" />
            <br>
            <label for="message">Votre message (facultatif) :</label>
            <br>
            <input type="textarea" name="message" id="message" />
            <br>
            <br>
            <input type="submit" value="Créer le coffret"/>
        </form>
        </div>
    </div>

@endsection