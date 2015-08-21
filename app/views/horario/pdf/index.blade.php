<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	{{ HTML::style('css/main.css') }}
</head>
<body ng-controller="horario">
	<table class="table">
		<thead>
			<tr>
				<th>Hora</th>
				<th ng-repeat="d in dia">@{{ d.dia }}</th>

			</tr>
		</thead>
	</table>

	{{ HTML::script('js/vendor/underscore.js') }}
	{{ HTML::script('js/vendor/angular.js') }}
	{{ HTML::script('js/app.js') }}
	{{ HTML::script('js/angular/filter/filter.js') }}
	{{ HTML::script('js/angular/controller/horario.js') }}
	{{ HTML::script('js/angular/service/appService.js') }}
</body>
</html>