@extends('hello')

@section('section')
	
	<section class="container text-center">
		<p class="face">:(</p>
		<h2><strong>Primero agregue datos</strong></h2>
		<a href="{{ $link }}" class="icon-link" data-toggle="tooltip" data-placement="bottom" title="{{ $title }}">
			<i class="fa fa-plus-circle"></i>
		</a>
	</section>

@stop