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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Créer un coffret</div>
                        <div class="card-body">
                            <form method="POST" action="">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right"> Nom du coffret :</label>
                                    <div class="col-md-6">
                                        <input type="text" name="name" id="name" required/>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                <label for="date" class="col-sm-4 col-form-label text-md-right">Date d'ouverture (facultatif) :</label>
                                    <div class="col-md-6">
                                        <input type="date" name="date" id="date" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                <label for="message" class="col-sm-4 col-form-label text-md-right">Votre message (facultatif) :</label>
                                    <div class="col-md-6">
                                        <input type="textarea" name="message" id="message" />
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <input type="submit" value="Créer le coffret"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection