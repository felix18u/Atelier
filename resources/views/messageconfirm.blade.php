@extends('default')


@section('title')
    gift name
@endsection


@section('link')
    <link rel="stylesheet" href="{{ asset('/css/gift.css') }}">
@endsection

@section('content')
    <h1 class="display-4 text-center">Votre message a bien été envoyé !</h1>
    <a href="{{ URL::previous() }}"><input class="btn btn-secondary" type="button" value="Retourner voir vos cadeaux"/></a>
@endsection
