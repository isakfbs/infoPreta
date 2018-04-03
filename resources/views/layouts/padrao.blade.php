<!--Pagina principal do sistema-->

<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <title>{{ config('app.name', 'InfoPreta') }}</title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}"><!-- CSRF Token -->
    
    <!-- Inclue as referencias do javaScript-->
    @include('layouts.headscript')

    <!-- Inclue meta Links -->
    @include('layouts.headlinks')       
  </head>

  <body>

      <!-- Menu de navegação principal -->   
      @include('layouts.navbar');

      <!-- Aqui sera importado o conteudo da pagina -->
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