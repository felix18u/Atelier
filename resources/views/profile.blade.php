@extends('default')

@section('title')
    Profil
@endsection


@section('link')
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1 class="display-3">Mon profil</h1>
    </div>
    <br>
    <div class="container">
        <form method="POST" action="{{ url('profile') }}">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ Auth::user()->id }}"/>
            <label for="name"> Votre nom :</label>
            <br>
            <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" pattern="[a-z]{1,}"/>
            <br>
            <label for="email">Votre adresse mail :</label>
            <br>
            <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
            <br>
            <br>
            <input type="submit" value="Valider les modifications"/>
        </form>
    </div>

@isset($var)
<br>
<div class="container">
    <p>Vos modifications ont bien été prises en compte.</p>
</div>
@endisset
<br>
<div class="container">
    <h1 class="display-3">Mes coffrets</h1>
</div>
<br>
    <div class="container">
    @foreach($coffrets as $coffret)
    <a href='.profile/coffret/{{$coffret->id}}'><button type="button" class="btn btn-primary">Modifier</button></a>
    <div>
        {{ $coffret->nom }}
    </div>
    @endforeach
    <!-- Liste des coffrets -->
    </div> 

@endsection
