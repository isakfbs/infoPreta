<!DOCTYPE html>
<html>
	<head>
		<title>Controle de estoque</title>
		<link href="/css/app.css" rel="stylesheet">
		<link rel="stylesheet" href="/css/custom.css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">

			<nav class="navbar navbar-default">
				<div class="container-fluid">
				
					<div class="navbar-header">
						<a class="navbar-brand" href="/produtos">Estoque Laravel</a>
					</div>
				
					<ul class="nav navbar-nav navbar-right">
						<li><a href="{{ action('ProdutoController@lista') }}">Listagem</a></li>
	  					<li><a href="{{ action('ProdutoController@novo') }}">Novo</a></li>

					</ul>	
				</div>
			</nav>
			@yield('conteudo')
			<footer class="footer">
				<p>©</p>
			</footer>
		</div>
			
	</body>
</html>