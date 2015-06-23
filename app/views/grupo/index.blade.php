@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-12">
			
			@foreach ($data as $d)
				{{ $d->carrera }}
			@endforeach
		</div>
	</div>
</section>

@stop