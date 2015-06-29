@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Descripcion</div>
				<div class="panel-body">
			    	<p>{{ $data->dia }}</p>
			    	<p><small>identificador: {{ $data->id }}</small></p>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
	{{-- opciones del dia --}}
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			@if(Session::has('mensaje_error'))
			<div class="alert alert-dismissable alert-danger">
			  	<button type="button" class="close" data-dismiss="alert">×</button>
	            {{ Session::get('mensaje_error') }}
			</div>
	        @endif
	        {{ Form::open(['route' => ['dia.destroy',$data->id], 'method' => 'DELETE']) }}
				<button class="btn btn-danger">Eliminar</button>
			{{ Form::close() }}
		</div>
		<div class="col-md-3"></div>
	</div>
</section>

@stop