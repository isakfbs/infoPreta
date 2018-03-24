
@extends('layouts/padrao')

@section('conteudo')

	<!--Carousel -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  	 
	  	 <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
 		 </ol>

		<div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="/img/nvidia.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="/img/asus.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="/img/intel.jpg" alt="Third slide">
		    </div>
		</div>

		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
  		</a>
  		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
  		</a>
	</div>
	<!-- Section q separa o slide dos produtos-->

	<div class="jumbotron">
	  <h1 class="display-4">Bem vindo à InfoPreta Store</h1>
	  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
	  <hr class="my-4">
	  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
	  <p class="lead">
	    <a class="btn btn-primary btn-lg" href="#" role="button">Sobre</a>
	  </p>
	</div>
	
	<!-- Vitrine de produtos -->
	<section class="container">
		<!-- pegar uma array de produtos e mostrar com foreach-->		
	<div class="container" role="main">
		<div class="page-header">
			<h1>Produtos</h1>
		</div>
		<div class="row">
			@foreach($produtos as $p)		
 				<div class="col-sm-6 col-md-4 ">
				    <div class="thumbnail">
				      	<img class="img-fluid img-thumbnail" src="img/produto.png" alt="...">
				      	<div class="caption">
				        	<h3>{{ $p->nome }}</h3>
				        	<p>{{ $p->descricao }}</p>
				        	<p><a href="{{action('ProdutoController@mostra', $p->id)}}" class="btn btn-primary" role="button">Comprar</a> 
				      	</div>
				    </div>
				</div>
			@endforeach
		</div>
		<!-- Paginacao --> 
		{{ $produtos->links() }}
	</div>

	</section>

@stop
