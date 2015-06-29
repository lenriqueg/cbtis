

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href=" {{ asset('css/main.css') }}">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">CBTIS 251</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Aulas<b class="caret"></b></a>
				        <ul class="dropdown-menu">
				            <li><a href="{{ URL::route('aulas') }}">Lista de aula</a></li>
				            <li><a href="{{URL::route('aula.new')}} ">Nueva aulas</a></li>
				        </ul>
				    </li>
				    <li class="dropdown">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Especialidades<b class="caret"></b></a>
				        <ul class="dropdown-menu">
				            <li><a href="{{ URL::route('especialidades') }}">Lista de especialidades</a></li>
				            <li><a href="{{URL::route('esp.new')}} ">Nueva especialidad</a></li>
				        </ul>
				    </li>
					<li><a href=" {{ action('CicloController@index') }} ">Ciclos</a></li>
					<li><a href="{{-- {{URL::action('AuthController@logOut')}} --}}">Cerrar Sesión</a>
				</ul>
			</div>
		</div>
	</nav>

	@yield('section')

	<div class="container">
		<footer>
			<p>
				CBTIS #251 2014
			</p>
			<p class="text-muted">
				Sistema Desarrollado por Ing. Informática
			</p>
		</footer>
	</div>

	@yield('scripts')
	<script>
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		})
	</script>
	
</body>
</html>
