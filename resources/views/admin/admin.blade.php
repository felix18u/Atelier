@extends('default')

@section('content')
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
                    <button type="button" class="btn btn-primary">Ajouter une prestation</button>
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
                actif
            </td>
            <td>
            <button type="button" class="btn btn-primary">Changer état</button>
            </td>
            <td>
                
            </td>
        </tr>
        
@endforeach
    </tbody>
    </table>
@endsection