<!--
	Essa classe configura a vitrine de produtos
	
-->

<div class="vitrine" >
	<div class="">
		<h1>Produtos</h1>
	</div>
	<div class="row">
		@foreach($produtos as $p)		
		 	<div class="col-sm-6 col-md-4 ">
				<div class="thumbnail">
					<img class="img-fluid img-thumbnail" src="img/produto2.png" alt="...">
						<div class="caption">
						    <h3>{{ $p->nome }}</h3>
						    <p>{{ $p->descricao }}</p>
						    <p><a href="{{ action('ProdutoController@mostra', $p->id)}}" class="btn btn-primary" role="button">Comprar</a> 
						</div>
				</div>
			</div>
		@endforeach
	</div>
	<!-- Paginacao --> 
	{{ $produtos->links() }}
</div>