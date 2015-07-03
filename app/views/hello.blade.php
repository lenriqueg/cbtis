<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CBTIS #251</title>
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
				<a class="navbar-brand" href="{{ route('root') }}">CBTIS 251</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Aulas<b class="caret"></b></a>
				        <ul class="dropdown-menu">
				            <li><a href="{{ route('aulas') }}">Lista de aula</a></li>
				            <li><a href="{{route('aula.new')}} ">Nueva aulas</a></li>
				        </ul>
				    </li>
				    <li class="dropdown">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Especialidades<b class="caret"></b></a>
				        <ul class="dropdown-menu">
				            <li><a href="{{ route('especialidades') }}">Lista de especialidades</a></li>
				            <li><a href="{{route('esp.new')}} ">Nueva especialidad</a></li>
				        </ul>
				    </li>
				    <li class="dropdawn">
				    	<a href="" class="dropdown-toggle" data-toggle="dropdown">Ciclos<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{ action('CicloController@index') }}">Lista de ciclos</a></li>
							<li><a href="{{route('ciclo.new')}} ">Nuevo ciclo</a></li>
						</ul>
				    </li>
				    <li class="dropdawn">
				    	<a href="" class="dropdown-toggle" data-toggle="dropdown">Dias<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{ route('dias') }}">Lista de dias</a></li>
							<li><a href="{{route('dia.new')}} ">Nuevo dia</a></li>
						</ul>
				    </li>
				    <li class="dropdawn">
				    	<a href="" class="dropdown-toggle" data-toggle="dropdown">Horas<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{ route('horas') }}">Lista de horas</a></li>
							<li><a href="{{route('hora.new')}} ">Nueva hora</a></li>
						</ul>
				    </li>
				    <li class="dropdawn">
				    	<a href="" class="dropdown-toggle" data-toggle="dropdown">Maestros<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{ route('maestros') }}">Lista de Maestros</a></li>
							<li><a href="{{route('mtr.new')}} ">Nuevo maestro</a></li>
						</ul>
				    </li>
				    <li class="dropdawn">
				    	<a href="" class="dropdown-toggle" data-toggle="dropdown">Materias<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{ route('materias') }}">Lista de Materias</a></li>
							<li><a href="{{route('mat.new')}} ">Nueva materia</a></li>
						</ul>
				    </li>
				    <li class="dropdawn">
				    	<a href="" class="dropdown-toggle" data-toggle="dropdown">Semestres<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{ route('semestres') }}">Lista de semestres</a></li>
							<li><a href="{{route('sem.new')}} ">Nuevo semestre</a></li>
						</ul>
				    </li>
				    <li class="dropdawn">
				    	<a href="" class="dropdown-toggle" data-toggle="dropdown">Turnos<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{ route('turnos') }}">Lista de turnos</a></li>
							<li><a href="{{route('turno.new')}} ">Nuevo turno</a></li>
						</ul>
				    </li>
					<li><a href="{{-- {{action('AuthController@logOut')}} --}}">Cerrar Sesión</a>
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
