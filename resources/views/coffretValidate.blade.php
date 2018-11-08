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
                        <form method="POST" action="/coffret/coffretValidate/{{ $b->id }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $b->id }}" />
                            <label for="nom">Votre nom:</label>
                            <input type='textarea' name='nom' id='nom' value="{{$b->nom}}">
                            
                            <label for="message">Votre message :</label>
                            <input type="textarea" name="message" id="message" value="{{ $b->message }}"/>
                            <label for='paiement_id' name='paiement_id' id='paiement_id' value="{{$b->paiement_id}}"/>
                            <input type='radio' name='paiement_id' value='1' checked>Classique
                            <input type='radio' name='paiement_id' value='0'>Cagnotte
                            <input type="submit" action='' value="Valider"/>
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
    <a href="{{ url('profile') }}"><button type="button" class="btn btn-secondary">Retour</button></a>
        </div>
    </div>
@endsection