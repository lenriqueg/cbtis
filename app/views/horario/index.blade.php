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

	@yield('scripts')
</body>
</html>