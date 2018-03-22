
@extends('layouts.padrao')

@section('conteudo')

@if(empty($produtos))
	<div class="alert alert-danger">
		Você não tem nenhum produto cadastrado.
	</div>
@else
	<h1>Listagem de produtos</h1>
	<table class="table table-striped table-bordered table-hover">
		@foreach ($produtos as $p)
			<tr class="{{ $p->quantidade <= 1 ? 'text-danger' : ''}}">
				<td>{{ $p->nome }}</td>
				<td>{{ $p->categoria->id }}</td>
				<td>{{ $p->valor }}</td>
				<td>{{ $p->descricao }}</td>
				<td>{{ $p->quantidade }}</td>
				<td>{{ $p->tamanho }}</td>
				<td>
					<a href="{{action('ProdutoController@mostra', $p->id)}}">
  						<span class="glyphicon glyphicon-search"></span>	
					</a>
					<a href="{{action('ProdutoController@remove', $p->id)}}"> 
      					<span class="glyphicon glyphicon-trash"></span>
    				</a>
				</td>
			</tr>			
		@endforeach 
	</table>
@endif

@if(old('nome'))	
<div class="alert alert-success">
<strong>Sucesso!</strong> 
    O produto {{ old('nome') }} foi adicionado.
</div>
@endif

@stop