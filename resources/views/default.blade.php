<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Matthieu Dufour">
    <meta name="author" content="Théo Borg">
    <meta name="author" content="Paul Félix">
    <meta name="author" content="Yannis Mally">

    <title>@yield('title')</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('/css/general.css') }}">
        @yield('link')
</head>

  <body style="padding-top:50px">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="{{ route('home') }}">MyGiftBox</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Catalogue</a>
          </li>
          @auth
            <li class="nav-item">
              <a class="nav-link" href="#vraichemincoffret">Créer un coffret</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Créer un coffret</a>
            </li>
          @endauth
        </ul>
        <ul class="navbar-nav ">

        <!-- Si connecté -->
        @auth
          <li class="nav-item">
            <a class="nav-link" href="#">Déconnexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profil</a>
          </li>
        
        <!-- Fin -->
        @else
        <!-- Si déconnecté -->

        
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Se connecter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">S'inscrire</a>
          </li>
        
        @endauth  
        <!-- Fin -->

        

        </ul>
      </div>
    </nav>

    <main role="main" style="padding-top:40px">

      @yield('content')

    </main><!-- /.container -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
