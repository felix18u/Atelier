@extends('default')

@section('content')
    <div class="container">
    <a href="/addGift"><button type="button" class="btn btn-primary" style="margin-bottom: 40px">Ajouter une prestation</button></a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">
                    ID
                </th>
                <th scope="col">
                    Nom
                </th>
                <th scope="col">
                    CatégorieID
                </th>
                <th scope="col">
                    Prix
                </th>
                <th scope="col">
                    Actif
                </th>
                <th scope="col">
                    
                </th>
                <th scope="col">
                    Supprimer
                </th>
            </tr>
        </thead>
        </tbody>

    @foreach($gifts as $gift)
        <tr>
            <td>
                {{$gift->id}}
            </td>
            <td>
                <a href="/gift/{{$gift->id}}">{{$gift->nom}}</a>
            </td>
            <td>
                {{$gift->cat_id}}
            </td>
            <td>
                {{$gift->prix}}
            </td>
            <td>
                @if( $gift->actif === 1 )
                    Actif
                @else 
                    Inactif
                @endif
            </td>
            <td>
                <form method="POST" action="{{ route('active') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$gift->id}}"/>
                    <input type="hidden" name="active" value="{{$gift->actif}}"/>
                    <input type="submit" class="btn btn-primary" value="Changer état"></button>
                </form>
            </td>
            <td>
                <form method="POST" action="{{ route('deleteGift') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$gift->id}}"/>
                    <input type="submit" class="btn btn-danger" value="Supprimer"></button>
                </form>
            </td>
        </tr>
        
@endforeach
    </tbody>
    </table>
    </div>
@endsection