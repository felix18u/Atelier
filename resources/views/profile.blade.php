@extends('default')

@section('title')
    Profil
@endsection


@section('link')
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1 class="title text-center">Mon profil</h1>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Modifier son profil</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('profile') }}">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right"> Votre nom :</label>
                                <div class="col-md-6">
                                    <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" pattern="[a-z]{1,}"/>
                                </div>
        
                            </div>
                            
                            <div class="form-group row">
                                <label for="email">Votre adresse mail :</label>
                                <div class="col-md-6">
                                    <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
                                </div>
                            </div>

                            

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <input type="submit" value="Valider les modifications"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @isset($var)
    <br>
    <div class="container">
        <p>Vos modifications ont bien été prises en compte.</p>
    </div>
    @endisset
    <div class="container">
        <h1 class="title text-center" style="margin-top: 40px">Mes coffrets</h1>
    </div>
    
        <div class="container">  
        @if(count($coffrets) != 0)                           
            <div class="grid-vertical">
            <div class="grid-vertical">
                    <div class="grid-article">
                        <p>Nom du coffret</p>
                        <p>Etat du coffret</p>
                        <p>Montant total</p>
                    </div>
                </div>
            @foreach($coffrets as $coffret)
                <div class="grid-vertical">
                    <div class="grid-article">
                        <p>{{$coffret->nom}}</p>
                        <p>{{ $coffret->etat }}</p>
                        <p>{{ $coffret->montantTotal }}€</p>
                        <a href="/coffret/{{ $coffret->id }}"><button>Voir</button></a>
                        <a href='/coffret/{{$coffret->id}}'><button>Modifier</button></a>
                    </div>
                </div>
            @endforeach
            </div>
        
    
        @else
            
                <div class="form">
                    <p>Vous n'avez contribué à aucun coffret pour l'instant.</p>
                    </div>
                </div>
        @endif
            <div class="form">
                <a href="{{ url('createBox') }}"><button>Créer un coffret</button></a>
            </div>
        </div>

@endsection
