<!DOCTYPE html>
<html lang="en">
<head>

	@include('Theme.includes.head')

	@yield('headplus')

</head>

<body>
	<div class="super_container">

		<!-- Header -->	
		@include('Theme.mod.header')

		@yield('conteudo')

		<!-- Newsletter -->

		@include('Theme.mod.newsletter')

		<!-- Footer -->

		@include('Theme.mod.footer')	

		<!-- Copyright -->

		@include('Theme.mod.copy')

	</div>

		@yield('script')
</body>

</html>