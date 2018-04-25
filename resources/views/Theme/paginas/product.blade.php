@extends('Theme.layout.principal')	

	@section('headplus')
		<title>Single Product</title>
		<link rel="stylesheet" type="text/css" href="../styles/product_styles.css">
		<link rel="stylesheet" type="text/css" href="../styles/product_responsive.css">
	@stop

	@section('conteudo')

		<!-- Single Product -->

		@include('Theme.mod.single_product')

		<!-- Recently Viewed -->

		@include('Theme.mod.viewed')

		<!-- Brands -->

		@include('Theme.mod.brands')
	
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
		<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
		<script src="../plugins/easing/easing.js"></script>
		<script src="../js/product_custom.js"></script>
	@stop