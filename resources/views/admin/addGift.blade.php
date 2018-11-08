@extends('default')

@section('title')
    Création de prestation
@endsection


@section('link')
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1 class="title text-center">Nouvelle prestation</h1>
    </div>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Créer une prestation</div>
                        <div class="card-body">
                            <form method="POST" action="">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right"> Nom de la prestation :</label>
                                    <div class="col-md-6">
                                        <input type="text" name="name" id="name" required/>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                <label for="price" class="col-sm-4 col-form-label text-md-right">Prix :</label>
                                    <div class="col-md-6">
                                        <input type="number" step="0.01" name="price" id="price" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                <label for="desc" class="col-sm-4 col-form-label text-md-right">Description :</label>
                                    <div class="col-md-6">
                                        <textarea name="desc" id="desc" rows="5" cols="30"> </textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <input type="submit" value="Créer la prestation"/>
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