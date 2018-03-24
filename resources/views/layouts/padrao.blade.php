<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script> --> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Css local -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="/css/custom.css">   

    <title>{{ config('app.name', 'InfoPreta') }}</title>
  </head>
  <body>

  <!--Menu de navegação principal-->   
  <nav class="navbar sticky-top navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <!--botao de expandir o menu -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span><!-- icone do botao -->
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Links à esquerda -->
        <ul class="navbar-nav mr-auto">
          <!--link para pagina inicial-->        
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
          </li>
          <!--link para pagina de produtos-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos
            </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Ferramentas</a>
                <a class="dropdown-item" href="#">Periféricos</a>
                <a class="dropdown-item" href="#">Computadores</a>
              </div>
          </li>
          <!--link para pagina sobre-->   
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
          </li>
          <!--link para pagina contato-->   
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
          </ul>
          <!-- Links à direita -->
          <ul class="navbar-nav ml-auto">
            <!-- Link para pagina de adiministracao (Esse link deve aparecer somente para adimin)-->
            <li class="nav-item">
              <a class="nav-link" href="{{ action('ProdutoController@lista') }}">Adimin</a>
            </li>
          <!--link para pagina de login-->      
            @guest
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Entrar
                </a>
                <!-- Authentication Links -->
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                  <a class="dropdown-item" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                </div>
              </li> 
            @else 
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> {{ Auth::user()->name }} 
                  <span class="caret"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </div>
              </li>
            @endguest
          </ul>
          <!--Campo de pesquisa-->
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>

      </div>
    </div>
  </nav>

      @yield('conteudo')

  <footer>
    <!--Endereço fisico-->
    <address>
      InfoPreta<br>
      R. Artur de Azevedo, 731 - Pinheiros<br>
      São Paulo - SP, 05404-011<br>
    </address>
    <!--Endereço eletronico-->
    <address>
      Tel: (11) 94915-6036<br>
      E-mail: infopreta.evoluindo@gmail.com<br>
      Funcionamento de segunda á sexta das 10:30 às 18:00.
    </address>
  </footer>
  </body>
</html>