@extends('layouts/padrao')

@section('conteudo')

	<!--Carousel -->
	@include('main.carousel')
	<!-- Section q separa o slide dos produtos-->

	<div class="jumbotron">
	  <h1 class="display-4">Bem vindo à InfoPreta Store</h1>
	  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
	  <hr class="my-4">
	  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
	  <p class="lead">
	    <a class="btn btn-primary btn-lg" href="http://www.infopreta.com.br/" role="button">Sobre</a>
	  </p>
	</div>
	


@stop
