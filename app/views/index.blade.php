@extends('layouts.main')

@section('navigation')
@parent
	<li><a href="/about">About</a></li>
@endsection

@section('main')
<div class="jumbotron">
	<div class="row">
		<div class="col-md-8">
			<h1>Welcome to Postr</h1>
			<hr>
			<p>Postr is a demo app for learning Laravel 4 where you can share photos with family and friends.</p>
            <p>Wow them with your photo-filtering abilities!</p>
            <p>Let them see what a great photographer you are!</p>
            <hr>
			<p><a href="about" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
		</div>
		<div class="col-md-4">
			{{ HTML::image('/img/iphone5.png', $alt="iPhone 5", $attributes = array()) }}
		</div>
	</div>
</div>


@stop