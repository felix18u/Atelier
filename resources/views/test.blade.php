@extends('default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modifier son profil</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('profile') }}">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right"> Votre nom :</label>
                            <div class="col-md-6">
                                <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" pattern="[a-z]{1,}"/>
                            </div>
    
                        </div>
                        
                        <div class="form-group row">
                            <label for="email">Votre adresse mail :</label>
                            <div class="col-md-6">
                                <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <input type="submit" value="Valider les modifications"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
