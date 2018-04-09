<nav class="sidemenu" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header"> 
			<h1>Categorias</h1>
		</div>
		<div>
			<ul class="nav navbar-nav">
				@foreach($categorias as $c )
					<li class="active"><a href="#">{{ $c->nome }}</a></li>	
				@endforeach
			</ul>
		</div>
	</div>
</nav>