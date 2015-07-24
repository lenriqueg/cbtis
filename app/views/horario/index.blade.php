<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/main.css') }}
</head>
<body ng-app="app">

	@yield('section')

	{{ HTML::script('js/vendor/angular.js') }}
	{{ HTML::script('js/app.js') }}
	{{ HTML::script('js/angular/controller/especialidad.js') }}
	{{ HTML::script('js/angular/service/especialidadService.js') }}
</body>
</html>