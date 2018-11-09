@extends('default')


@section('title')
    Catalogue
@endsection


@section('link')
    <link rel="stylesheet" href="{{ asset('/css/catalogue.css') }}">
@endsection



@section('content')
    <div class="container">
        <h1 class="title text-center">Catalogue</h1>
    </div>

    <?php $url= URL::current();
        $url =str_replace("/croissant",'',$url);
        $url =str_replace("/decroissant",'',$url);
    ?>

    <div class="container text-center">

        <a href="<?php echo $url?>/croissant"><button type="button" class="btn btn-primary">Prix Croissant</button></a>
        <a href="<?php echo $url?>/decroissant"><button type="button" class="btn btn-primary">Prix Décroissant</button></a>
        <a href="/catalog/category/1"><button type="button" class="btn btn-primary">Attention</button></a>
        <a href="/catalog/category/2"><button type="button" class="btn btn-primary">Activité</button></a>
        <a href="/catalog/category/3"><button type="button" class="btn btn-primary">Restauration</button></a>
        <a href="/catalog/category/4"><button type="button" class="btn btn-primary">Hébergement</button></a>
        <a href="/catalog"><button type="button" class="btn btn-primary">Toutes les Catégories</button></a>
    </div>

    @isset($message)
        <div class="container text-center">
            <p> {{ $message }} </p>
        </div>
    @endisset
    <div class="container">                             
        <div class="grid-vertical">
            @foreach($gifts as $gift)
                <div class="grid-article">
                
                    <a href="/gift/{{$gift->id}}"><img src="{{ asset('/storage/img/'.$gift->img) }}"></a>
                    <a class="nom" href="/gift/{{$gift->id}}"><div>{{$gift->nom}}</div></a>
                    <p class="prix">{{$gift->prix}}€</p>
                    @auth
                    <form method="POST" onsubmit="return alert('La prestation a été ajouté au coffret');" action="">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{ $gift->id }}" name="presta" id="presta"/>
                        <input type="submit" value="Ajouter" class="btn btn-secondary"/>
                        <select name="coffrets" id="coffrets">
                            @foreach($boxes as $box)
                                @if($box->etat == "En cours de création")
                                <option value="{{ $box->id }}">{{ $box->nom }}</option>
                                @endif
                            @endforeach
                        </select>
                    </form> 
                    @endauth
                </div>
            @endforeach
            
        </div>
    </div>
@endsection

