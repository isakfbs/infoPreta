@extends('Theme.layout.principal')	

	@section('headplus')
		<title>Carrinho</title>
		<link rel="stylesheet" type="text/css" href="../styles/cart_styles.css">
		<link rel="stylesheet" type="text/css" href="../styles/cart_responsive.css">
	@stop

	@section('conteudo')
		<!-- Cart -->
		<div class="cart_section">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="cart_container">
							<div class="cart_title">Carrinho de compras</div>

							<!-- mensagens de produto adicionado-->
							@if (Session::has('mensagem-sucesso'))
					            <div class="alert alert-success">
					                <strong>{{ Session::get('mensagem-sucesso') }}</strong>
					            </div>
					        @endif
					        @if (Session::has('alert alert-danger'))
					            <div class="card-panel red">
					                <strong>{{ Session::get('mensagem-falha') }}</strong>
					            </div>
					        @endif


					        @forelse ($pedidos as $pedido)
					            @php
                        			$total_pedido = 0;
                    			@endphp
	            				<h5 class="col l6 s12 m6"> Pedido: {{ $pedido->id }} </h5>
	            				<h5 class="col l6 s12 m6"> Criado em: {{ $pedido->created_at->format('d/m/Y H:i') }} </h5>
	            				<!-- Itens -->
								@foreach($pedido->pedido_produtos as $pedido_produto)
									<div class="cart_items">
										<ul class="cart_list">
											<li class="cart_item clearfix">

												<div class="cart_item_image"><img src="{{ $pedido_produto->produto->imagemsrc }}" alt="imagem do produto"></div>

												<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">													
													<div class="cart_item_name cart_info_col">
														<div class="cart_item_title">Nome</div>
														<div class="cart_item_text">{{ $pedido_produto->produto->nome }}</div>
													</div>

													<div class="cart_item_color cart_info_col">
														<div class="cart_item_title">Cor</div>
														<div class="cart_item_text"><span style="background-color:#999999;"></span>Prata</div>
													</div>

													<div class="cart_item_quantity cart_info_col">
														<div class="cart_item_title">Quantidade</div>
														<div class="cart_item_text">1</div>
													</div>

													<div class="cart_item_price cart_info_col">
														<div class="cart_item_title">Preço</div>
														<div class="cart_item_text">R${{ number_format($pedido_produto->produto->valor, 2,',','.') }}</div>
													</div>

													@php
							                            $total_produto = $pedido_produto->valores - $pedido_produto->descontos;
							                            $total_pedido += $total_produto;
                       								 @endphp

													<div class="cart_item_total cart_info_col">
														<div class="cart_item_title">Total</div>
														<div class="cart_item_text">R$ {{ number_format($total_produto, 2, ',', '.') }}</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
								@endforeach
								
								<!-- Order Total -->
								<div class="order_total">
									<div class="order_total_content text-md-right">
										<div class="order_total_title">Total:</div>
										<div class="order_total_amount">R$ {{ number_format($total_pedido, 2, ',', '.') }}</div>
									</div>
								</div>

								<div class="cart_buttons">
									<form style="display:inline-block;" action="{{ route('shop') }}">
										<button  class="button cart_button_clear">Continuar comprando</button>
									</form>
									
									<button type="button" class="button cart_button_checkout">Finalizar compra</button>
								</div>

					        @empty
            					<h5>Não há nenhum pedido no carrinho</h5>
        					@endforelse
						</div>
					</div>
				</div>
			</div>
		</div>
	@stop
		
	@section('script')
		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="../styles/bootstrap4/popper.js"></script>
		<script src="../styles/bootstrap4/bootstrap.min.js"></script>
		<script src="../plugins/greensock/TweenMax.min.js"></script>
		<script src="../plugins/greensock/TimelineMax.min.js"></script>
		<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
		<script src="../plugins/greensock/animation.gsap.min.js"></script>
		<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
		<script src="../plugins/easing/easing.js"></script>
		<script src="../js/cart_custom.js"></script>
	@stop