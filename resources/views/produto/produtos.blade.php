@extends('layouts/padrao')

@section('conteudo')
	
	<!--Menu de navegação por categorias a esquerda-->


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