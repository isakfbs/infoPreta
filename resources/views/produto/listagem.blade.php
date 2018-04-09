
@extends('layouts.padrao')

@section('conteudo')
	
	<!-- Pagina que lista os produtos do banco-->
	<main class="listagem container">
		<!--Exibe uma mensagem caso não encontre nenhum produto-->
		@if(empty($produtos))
			<div class="alert alert-danger">
				<p>Você não tem nenhum produto cadastrado.</p>
			</div>
		@else
			<h1>Listagem de produtos</h1>
			<table class="tabela-produtos table table-striped table-bordered table-hover">
				<thead class="tabela-cabecalho">
					<tr>
						<th>Nome</th>
						<th>Categoria</th>
						<th>Valor</th>
						<th>Descricão</th>
						<th>Quantidade</th>
						<th>Tamanho</th>
						<th>Opcões</th>
					</tr>
				</thead>

				@foreach ($produtos as $produto)	
					<tbody class="tabela-conteudo">	
			<!--Se houver algum produto com quantidade menor ou igual a 01, aparece com o nome em vermelho-->
						<tr class="{{ $produto->quantidade <= 1 ? 'text-danger' : ''}}">

							<td>{{ $produto->nome }}</td>
							<td>{{ $produto->categoria->id }}</td>
							<td>{{ $produto->valor }}</td>
							<td>{{ $produto->descricao }}</td>
							<td>{{ $produto->quantidade }}</td>
							<td>{{ $produto->tamanho }}</td>
								
							<td class="tabela-opcoes">
								<a id="detalhe-produto" href="{{action('ProdutoController@mostra', $produto->id)}}">
			  						<span class="glyphicon glyphicon-search"></span>	
								</a>
								<a id="remove-produto" href="{{action('ProdutoController@remove', $produto->id)}}"> 
			      					<span class="glyphicon glyphicon-trash"></span>
			    				</a>
							</td>
						</tr>
					</tbody>			
				@endforeach 			
			</table>
			<nav class="paginacao" >{{ $produtos->links() }}</nav>
		@endif
			<a href="{{ action('ProdutoController@novo') }}" class="novo-produto btn btn-success" type="button" >Novo Produto</button></a>

		@if(old('nome'))	
		<div class="alert alert-success">
		<strong>Sucesso!</strong> 
		    O produto {{ old('nome') }} foi adicionado.
		</div>
		@endif
	</main>

@stop