<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Postr - A demo app for learning Laravel 4</title>
			{{ HTML::style('css/bootstrap.min.css') }}
			{{ HTML::style('css/bootstrap-theme.css') }}
			{{ HTML::style('css/app.css') }}

			{{ HTML::script('js/jquery-1.10.2.min.js') }}
			{{ HTML::script('js/bootstrap.min.js') }}
	</head>
	<body>


		@yield('main')
		
	</body>
</html>