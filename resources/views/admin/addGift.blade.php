@extends('default')

@section('title')
    Création de prestation
@endsection


@section('link')
    <link rel="stylesheet" href="{{ asset('/css/addGift.css') }}">
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
                            <form method="POST" action="" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right"> Nom de la prestation :</label>
                                    <div class="col-md-6">
                                        <input type="text" name="name" id="name" required/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                <label for="descr" class="col-sm-4 col-form-label text-md-right">Description :</label>
                                    <div class="col-md-6">
                                        <textarea name="descr" id="descr" rows="5" cols="30"> </textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                <label for="category" class="col-sm-4 col-form-label text-md-right">Catégorie :</label>
                                    <div class="col-md-6">
                                        <select name="category" id="category">
                                            <option value="1">Attention</option>
                                            <option value="2">Activité</option>
                                            <option value="3">Restauration</option>
                                            <option value="4">Hébergement</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                <label for="image" class="col-sm-4 col-form-label text-md-right">Image :</label>
                                    <div class="col-md-6">
                                    <input type="file" name="image" id="image">
                                    </div>
                                </div>

                                <div class="form-group row">
                                <label for="price" class="col-sm-4 col-form-label text-md-right">Prix :</label>
                                    <div class="col-md-6">
                                        <input type="number" step="0.01" name="price" id="price" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                <label for="active" class="col-sm-4 col-form-label text-md-right">Actif :</label>
                                    <div class="col-md-6">
                                    <label for="active">
                                        <input name="active" type="radio" value="1" checked>
                                        Actif
                                    </label>
                                    <label for="active"> 
                                        <input name="active" type="radio" value="0">
                                        Inactif
                                    </label>
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