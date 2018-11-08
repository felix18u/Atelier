@extends('default')


@section('title')
    Coffret
@endsection


@section('link')
    <link rel="stylesheet" href="{{ asset('/css/catalogue.css') }}">
@endsection


@section('content')


    @foreach($box as $b)
    @isset(Auth::user()->id)
        @if($b->users_id == Auth::user()->id )
        <div class="container">
        <h1 class="display-3 text-center">{{ $b->nom }}</h1>
        </div>
        <div class="container">                             
            <div class="grid-vertical">
                <div class="grid-coffret">
                    
                    <div class="container">
                        <div class="form">
                        <form method="POST" action="/coffret/valider/{{ $b->id }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $b->id }}" />
                            <label for="nom">Votre nom:</label><br>
                            <input type='textarea' name='nom' id='nom' value="{{$b->nom}}"/>
                            
                            <!--<label for="prenom">Votre prénom:</label><br>
                            <input type='textarea' name='prenom' id='prenom' value="{{$b->prenom}}"/>
                            <label for="email">Votre email:</label><br>
                            <input type='email' name='email' id='email' value="{{$b->email}}"/>-->
                            <label for="message">Votre message :</label>
                            <br>
                            <input type="textarea" name="message" id="message" value="{{ $b->message }}"/>
                            <br>
                            <label for='payment' name='payment' id='payment' value="{{$b->payment}}"/><br>
                            <input type='radio' name='payment' value='classique' checked>Classique<br>
                            <input type='radio' name='payment' value='cagnotte'>Cagnotte<br>
                            <input type="submit" value="Valider les modification"/>
                        </form>
                        </div>
                    </div>

                    <p>Montant total: {{ $b->montantTotal }}€</p>
                </div>
        @else
                <div class="form">
                    <p>Vous n'avez pas le droit d'accéder à ce coffret.</p>
                    </div>
                </div>
        @endif

    @endisset

    @empty(Auth::user()->id)
            <div class="form">
                <p>Vous devez vous connecter.</p>
                </div>
            </div>
    @endempty

    @endforeach
    <a href=""><button id="valider">Valider</button></a>
    <a href="{{ url('profile') }}"><button type="button" class="btn btn-secondary">Retour</button></a>
        </div>
    </div>
@endsection