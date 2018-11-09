@extends('default')


@section('title')
    Coffret
@endsection


@section('link')
    <link rel="stylesheet" href="{{ asset('/css/catalogue.css') }}">
    <script src="{{ asset('/js/confirmation.js') }}"></script>
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

                    @isset($err)
                        <p class='coffretError'>{{$err}}</p>
                    @endisset

                    <p>{{ $b->etat }}</p>
                    
                    @isset($prestas)
                        @for($i=0; $i < count($prestas); $i++)
                        <div class="grid-article">
                        <a href="/gift/{{ $prestas[$i][0]->id }}"><img src="{{ asset('/storage/img/'.$prestas[$i][0]->img) }}"></a>
                        <a class="nom" href="/gift/{{ $prestas[$i][0]->id }}"><p>{{ $prestas[$i][0]->nom }}</p></a>
                        <p class="prix">{{ $prestas[$i][0]->prix }}€</p>
                        @if($b->etat == "En cours de création")
                        <a href="/coffret/suppr/{{ $b->id }}/{{ $prestas[$i][0]->id }}"><button class="btn btn-secondary" onclick="return confirmSupprGift();">Supprimer</button></a>
                        @else
                        <a href="/coffret/suppr/{{ $b->id }}/{{ $prestas[$i][0]->id }}"><button class="btn btn-secondary" disabled>Supprimer</button></a>
                        @endif
                        </div>
                        @endfor
                    @endisset
                    <br>

                    <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">Modifier le coffret</div>
                                            <div class="card-body">
                                                <form method="POST" action="/coffret/{{ $b->id }}">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{ $b->id }}" />
                                                    @if($b->etat =="En cours de création")
                                                    <div class="form-group row">
                                                        <label for="message" class="col-sm-4 col-form-label text-md-right">Votre message :</label>
                                                        <div class="col-md-6">
                                                            <textarea  name="message" id="message">{{ $b->message }}</textarea>
                                                        </div>
                                                    </div>
                                                    @else
                                                    <div class="form-group row">
                                                        <label for="message" class="col-sm-4 col-form-label text-md-right">Votre message :</label>
                                                        <div class="col-md-6">
                                                            <textarea  name="message" id="message" disabled>{{ $b->message }}</textarea>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    
                                                    @if($b->etat =="En cours de création")
                                                    <div class="form-group row">
                                                    <label for="date" class="col-sm-4 col-form-label text-md-right">Date d'ouverture du coffret :</label>
                                                        <div class="col-md-6">
                                                            <input type="date" name="date" id="date" value="{{ $b->date }}"/>
                                                        </div>
                                                    </div>
                                                    @else
                                                    <div class="form-group row">
                                                    <label for="date" class="col-sm-4 col-form-label text-md-right">Date d'ouverture du coffret :</label>
                                                        <div class="col-md-6">
                                                            <input type="date" name="date" id="date" value="{{ $b->date }}" disabled/>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    @if($b->etat =="En cours de création")
                                                    <div class="form-group row">
                                                    <label for="paiement_id" class="col-sm-4 col-form-label text-md-right">Mode de paiement :</label>
                                                        <div class="col-md-6">
                                                        <input type='radio' name='paiement_id' value='1' checked>Classique
                                                        <input type='radio' name='paiement_id' value='0'>Cagnotte
                                                        </div>
                                                    </div>
                                                    @else
                                                    <div class="form-group row">
                                                    <label for="paiement_id" class="col-sm-4 col-form-label text-md-right">Mode de paiement :</label>
                                                        <div class="col-md-6">
                                                        <input type='radio' name='paiement_id' value='1' checked disabled>Classique
                                                        <input type='radio' name='paiement_id' value='0'disabled>Cagnotte
                                                        </div>
                                                    </div>
                                                    @endif

                                                    <div class="form-group row mb-0">
                                                        <div class="col-md-8 offset-md-4">
                                                            @if($b->etat == "En cours de création")
                                                            <input type="submit" value="Enregistrer les modifications"/>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    @if(($box[0]->etat =="En attente de paiement"))
        <button class="btn btn-secondary" id="buttonurl" onclick="document.getElementById('url').style.display = 'inline';" >Générer l'url</button>
        <span class="url" id="url">{{ $box[0]->url }}</span>
        <button class="btn btn-secondary" id="bouton_paiement">Paiement</button>
    @elseif($box[0]->etat =="En cours de création")
    <a href="{{ url('/coffret/valid/'.$box[0]->id) }}"><button onclick="return confirmValidate();" class="btn btn-secondary" id="valider" >Valider le coffret</button></a>
    @endif
            </div>
        </div>
@endsection