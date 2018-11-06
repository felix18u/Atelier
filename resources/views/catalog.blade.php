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

    <div class="container">                             
        <div class="grid-vertical">
            <div class="grid-article">
                <img src="https://grenoble.takamaka.fr/images/content/grenoble/Parapente/Parapente%20sport%20%C3%A9t%C3%A9.jpg">
                <h2>Nom de l'article</h2>
                <button></button>
                <select name="coffrets">
                    <option>coffret un</option>
                    <option>coffret deux</option>
                    <option>coffret trois</option>
                </select> 
            </div>

            <div class="grid-article">
                <img src="https://grenoble.takamaka.fr/images/content/grenoble/Parapente/Parapente%20sport%20%C3%A9t%C3%A9.jpg">
                <h2>Nom de l'article</h2>
                <button></button>
                <select name="coffrets">
                    <option>coffret un</option>
                    <option>coffret deux</option>
                    <option>coffret trois</option>
                </select> 
            </div>

            <div class="grid-article">
                <img src="https://grenoble.takamaka.fr/images/content/grenoble/Parapente/Parapente%20sport%20%C3%A9t%C3%A9.jpg">
                <h2>Nom de l'article</h2>
                <button></button>
                <select name="coffrets">
                    <option>coffret un</option>
                    <option>coffret deux</option>
                    <option>coffret trois</option>
                </select> 
            </div>
        </div>
    </div>
@endsection

