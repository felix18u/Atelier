@extends('default')


@section('title')
    gift name
@endsection


@section('link')
    <link rel="stylesheet" href="{{ asset('/css/gift.css') }}">
@endsection

@section('content')
    @foreach($gifts as $gift)
        <div class="container">
            <h1 class="display-3 text-center">{{$gift->id}} - {{$gift->nom}}</h1>
        </div>


        <div class="container">
            <div class="grid-container">
                <p class="grid-img">img : {{$gift->img}}</p>
                <p class="grid-descr">descr : {{$gift->descr}}</p>
                <p class="grid-cat_id">cat_id : {{$gift->cat_id}}</p>
                <p class="grid-prix">prix : {{$gift->prix}}</p>
            </div>
        </div>
    @endforeach
@endsection
