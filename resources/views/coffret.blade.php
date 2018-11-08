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
        <h1 class="title text-center">{{ $b->nom }}</h1>
        </div>
        <div class="container">                             
            <div class="grid-vertical">
                <div class="grid-coffret">
                    <p>{{ $b->etat }}</p>
                    
                    @isset($prestas)
                        @for($i=0; $i < count($prestas); $i++)
                        <div class="grid-article">
                        <a class="img" href="/gift/{{ $prestas[$i][0]->id }}"><img src="{{ asset('img/'.$prestas[$i][0]->img) }}"></a>
                        <a class="nom" href="/gift/{{ $prestas[$i][0]->id }}"><p>{{ $prestas[$i][0]->nom }}</p></a>
                        <p class="prix">{{ $prestas[$i][0]->prix }}€</p>
                        <a href="/coffret/suppr/{{ $b->id }}/{{ $prestas[$i][0]->id }}"><button class="btn">Supprimer</button></a>
                        </div>
                        
                        @endfor
                    @endisset
                    <br>
                    <div class="container">
                        <div class="form">
                        <form method="POST" action="/coffret/{{ $b->id }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $b->id }}" />
                            <label for="message">Votre message :</label>
                            <br>
                            <input type="textarea" name="message" id="message" value="{{ $b->message }}"/>
                            <br>
                            <label for="date">Date d'ouverture du coffret :</label>
                            <br>
                            <input type="date" name="date" id="date" value="{{ $b->date }}"/>
                            <br>
                            <br>
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