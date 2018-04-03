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
          <li class="nav-item">
            <a class="nav-link" href="{{ route('produtos') }}">Produtos</a>
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