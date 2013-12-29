<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Postr - A demo app for learning Laravel 4</title>
			{{ HTML::style('css/bootstrap.min.css') }}
			{{ HTML::style('css/bootstrap-theme.css') }}
			{{ HTML::style('css/app.css') }}
			{{ HTML::style('css/bootstrap-app.css') }}

			{{ HTML::script('js/jquery-1.10.2.min.js') }}
			{{ HTML::script('js/bootstrap.min.js') }}
	</head>
	<body>
		<div class="container">
			<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		      <div class="container">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="/">Postr</a>
		        </div>
		        <div class="collapse navbar-collapse">
		          <ul class="nav navbar-nav">
					@section('navigation')
			           	<li class="active"><a href="/">Home</a></li>
			        @show
		          </ul>
		        </div><!--/.nav-collapse -->
		      </div>
		    </div>
		</div>
		<br><br><br>
		<div class="container">
			@yield('main')
		</div>
	</body>
</html>