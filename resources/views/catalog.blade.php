@extends('default')


@section('title')
    Catalogue
@endsection


@section('link')
    <link rel="stylesheet" href="{{ asset('/css/catalogue.css') }}">
@endsection



@section('content')
    <div class="container">
        <h1 class="display-3 text-center">Catalogue</h1>
    </div>

    <a href="{{route('catalog/croissant')}}">Prix Croissant</a>
    <a href="{{route('catalog/decroissant')}}">Prix Décroissant</a>

    <div class="container">                             
        <div class="grid-vertical">

                <div class="grid-article">
                    <p></p>
                    <a href=""><h2>{{$gift->nom}}</h2></a>
                    <p></p>
                    <button></button>
                    <select name="coffrets">
                        <option>coffret un</option>
                        <option>coffret deux</option>
                        <option>coffret trois</option>
                    </select> 
                </div>
            @foreach($gifts as $gift)
                <div class="grid-article">
                    <a href=""><img src="img/{{$gift->img}}"></a>
                    <a href=""><h2>{{$gift->nom}}</h2></a>
                    <p></p>
                    <button></button>
                    <select name="coffrets">
                        <option>coffret un</option>
                        <option>coffret deux</option>
                        <option>coffret trois</option>
                    </select> 
                </div>
            @endforeach
            
        </div>
    </div>
@endsection

