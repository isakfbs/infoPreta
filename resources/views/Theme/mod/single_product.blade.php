	<div class="single_product">
		<div class="container">
			<div class="row">

				<!-- Images -->
				<div class="col-lg-2 order-lg-1 order-2">
					<ul class="image_list">
						<li data-image="../images/single_4.jpg"><img src="../images/single_4.jpg" alt=""></li>
						<li data-image="../images/single_2.jpg"><img src="../images/single_2.jpg" alt=""></li>
						<li data-image="../images/single_3.jpg"><img src="../images/single_3.jpg" alt=""></li>
					</ul>
				</div>

				<!-- Selected Image -->
				<div class="col-lg-5 order-lg-2 order-1">
					<div class="image_selected"><img src="{{ $produto->imagemsrc }}" alt=""></div>
				</div>

				<!-- Description -->
				<div class="col-lg-5 order-3">
					<div class="product_description">
						<div class="product_category">Laptops</div>
						<div class="product_name">{{ $produto->nome }}</div>
						<div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
						<div class="product_text"><p>{{ $produto->descricao }}</p></div>
						<div class="order_info d-flex flex-row">

							<form action="{{ route('carrinho.adicionar') }}" method="post">

								<div class="clearfix" style="z-index: 1000;">

									<!-- Product Quantity -->
									<div class="product_quantity clearfix">
										<span>Quantidade: </span>
										<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
										<div class="quantity_buttons">
											<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
											<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
										</div>
									</div>

									<!-- Product Color -->
									<ul class="product_color">
										<li>
											<span>Cor: </span>
											<div class="color_mark_container"><div id="selected_color" class="color_mark"></div></div>
											<div class="color_dropdown_button"><i class="fas fa-chevron-down"></i></div>

											<ul class="color_list">
												<li><div class="color_mark" style="background: #999999;"></div></li>
												<li><div class="color_mark" style="background: #b19c83;"></div></li>
												<li><div class="color_mark" style="background: #000000;"></div></li>
											</ul>
										</li>
									</ul>

								</div>

								<div class="product_price">R${{ $produto->valor }}</div>
								

								<div class="button_container">
						              	 <input type="hidden" name="_token" value="{{ csrf_token() }}">
						                <input type="hidden" name="id" value="{{ $produto->id }}">

						                <button type="submit" class="button cart_button">Comprar</button> 

						                <div class="product_fav"><i class="fas fa-heart"></i></div>  					
								</div>
								
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>