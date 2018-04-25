@extends('Theme.layout.principal')

	@section('headplus')
		<title>Contato</title>
		<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
		<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
	@stop

	@section('conteudo')

		<!-- Contact Info -->

		@include('Theme.mod.contact_info')

		<!-- Contact Form -->

		@include('Theme.mod.contact_form')

		<!-- Map -->

		@include('Theme.mod.map')

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
		<script src="plugins/easing/easing.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
		<script src="js/contact_custom.js"></script>
	@stop