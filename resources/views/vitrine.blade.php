@extends('layouts/padrao')

@section('conteudo')
	<div class="container" role="main">
		<div class="page-header">
			<h1>Vitrine teste</h1>
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
		{{ $produtos->links() }}
	</div>
	
	
@stop


<!-- Alternativo


				<div class="card" >
					<img class="img-fluid card-img-top " src="/img/produto.png" alt="Card image cap">
					<div class="card-body text-center">
						<h5 class="card-title">{{ $p->nome }}</h5>
						<p class="card-text">{{ $p->descricao }}</p>
						<a href="{{action('ProdutoController@mostra', $p->id)}}" class="btn btn-primary">Enviar para carrinho</a>
					</div>
				</div>
					-->