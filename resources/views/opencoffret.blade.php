@extends('default')


@section('title')
    Coffret
@endsection


@section('link')
    <link rel="stylesheet" href="{{ asset('/css/catalogue.css') }}">
@endsection


@section('content')
    @empty($fail)
    <div class="container">                             
        <div class="grid-vertical">
            <div class="grid-coffret">
                <h1 class="display-4 text-center">Un coffret-cadeau vous a été offret par : {{ $nom }}</h1>
                @empty($confirm)
                    <a href="{{ url($url.'/confirm') }}"><input style="margin-top:40px;" class="col-sm-12 btn btn-secondary" type="button" value="Ouvrir ?"/></a>
                @endempty
                @isset($confirm)
                    <h1 class="display-5 text-center">{{ $message }}</h1>
                    <h2 class="display-5 text-center">Voici vos cadeaux</h2>
                    @isset($prestas)
                        @for($i=0; $i < count($prestas); $i++)
                            @isset($prestas)
                                @for($i=0; $i < count($prestas); $i++)
                                <div class="grid-article">
                                    <a href="/gift/{{$prestas[$i][0]->id}}/wp"><img src="{{ asset('img/'.$prestas[$i][0]->img) }}"></a>
                                    <a class="nom" href="/gift/{{$prestas[$i][0]->id}}/wp"><div>{{$prestas[$i][0]->nom}}</div></a>
                                </div>
                                @endfor
                            @endisset
                        @endfor
                    @endisset
                    </div>
        </div>
    </div>
                    <div class="container">
                    <form method="POST" action="">
                        {{ csrf_field() }}
                        <p class="text-center"> Remerciez le ! </p> 
                        <textarea  class=" col-sm-12" name="message" id="message" rows="5"></textarea>
                        <input class="col-sm-12 btn btn-secondary" type="submit" value="Le remercier"/>
                        
                    </form> 
                    </div>
                @endisset
           
    @endempty
    @isset($fail)
        <h1 class="display-3 text-center">Mince ! Ce cadeau n'existe pas :'(</h1>
        <h3 class="display-5 text-center">Il se peut que l'url ne soit pas correct</h3>
    @endisset
@endsection

