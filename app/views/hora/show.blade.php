@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Descripcion</div>
				<div class="panel-body">
			    	<p>Hora: {{ $data->hora }}</p>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
	{{-- opciones del ciclo --}}
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			@if(Session::has('mensaje_error'))
			<div class="alert alert-dismissable alert-danger">
			  	<button type="button" class="close" data-dismiss="alert">×</button>
	            {{ Session::get('mensaje_error') }}
			</div>
	        @endif
			{{-- <button class="btn btn-info">Actualizar</button> --}}
			{{ Form::open(['route' => ['hora.destroy', $data->id], 'method' => 'DELETE']) }}
			<button class="btn btn-danger">Eliminar</button>
			{{ Form::close() }}
		</div>
		<div class="col-md-3"></div>
	</div>
</section>

@stop