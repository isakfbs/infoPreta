@extends('layouts/padrao')

@section('conteudo')
	
	<section class="produtos">
		<!--Menu de navegação por categorias a esquerda-->
		@include('produto.side-menu')
		<!-- Vitrine de produtos -->		
		@include('produto.vitrine')
	</section>
	
@stop