@extends('Theme.layout.principal')	

	@section('headplus')
		<title>InfoPreta - Home</title>
		<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
		<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
		<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	@stop

	@section('conteudo')
		
		<!-- Banner -->

		@include('Theme.mod.banner')

		<!-- Characteristics -->
		@include('Theme.mod.characteristics') 


		<!-- Deals of the week -->

		@include('Theme.mod.deals')

		<!-- Banner 02-->

		@include('Theme.mod.banner_02')

		<!-- Hot New Arrivals -->

		@include('Theme.mod.arrivals')

		<!-- Best Sellers -->
		
		@include('Theme.mod.best_sell')

		<!-- Popular Categories -->

		@include('Theme.mod.popular_categories')

		<!-- Adverts -->

		<!-- @ include('Theme.mod.adverts') -->

		<!-- Trends -->

		@include('Theme.mod.trends')
		<!-- Brands -->

		@include('Theme.mod.brands')

		<!-- Reviews -->

		<!-- @ include('Theme.mod.reviews') -->
		

		<!-- Recently Viewed -->

		@include('Theme.mod.viewed')



	@stop

	@section('script')
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="styles/bootstrap4/popper.js"></script>
		<script src="styles/bootstrap4/bootstrap.min.js"></script>
		<script src="plugins/greensock/TweenMax.min.js"></script>
		<script src="plugins/greensock/TimelineMax.min.js"></script>
		<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
		<script src="plugins/greensock/animation.gsap.min.js"></script>
		<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
		<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
		<script src="plugins/slick-1.8.0/slick.js"></script>
		<script src="plugins/easing/easing.js"></script>
		<script src="js/custom.js"></script>
	@stop