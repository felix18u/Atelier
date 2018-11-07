@extends('default')


@section('title')
    Coffret
@endsection


@section('link')
    <link rel="stylesheet" href="{{ asset('/css/coffret.css') }}">
@endsection


@section('content')
<div class="container">
        <h1 class="display-3 text-center">Coffret</h1>
    </div>

    @foreach($box as $b)
    @isset(Auth::user()->id)
        @if($b->users_id == Auth::user()->id )
        <div class="container">                             
            <div class="grid-vertical">
                <div class="grid-coffret">
                    <h2>{{ $b->nom }}</h2>
                    <p>{{ $b->etat }}</p>
                    <p>{{ $b->montantTotal }}</p>
                    @isset($prestas)
                        @for($i=0; $i < count($prestas); $i++)
                        <a href="/gift/{{ $prestas[$i][0]->id }}"><img src="{{ asset('img/'.$prestas[$i][0]->img) }}"></a>
                        <p>{{ $prestas[$i][0]->nom }}</p>
                        @endfor
                    @endisset
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

        </div>
    </div>
@endsection