@extends('hello')

@section('section')
<section class="container text-center">
	<a href="{{ route('turnos') }}" class="icon-link" data-toggle="tooltip" data-placement="bottom" title="Atras">
		<i class="fa fa-arrow-circle-left"></i>
	</a>
	<a href="{{ route('turno.new') }}" class="icon-link" data-toggle="tooltip" data-placement="bottom" title="Nuevo turno">
		<i class="fa fa-plus-circle"></i>
	</a>
</section>
<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Descripción</div>
				<div class="panel-body">
			    	<p>Turno: {{ $data->turno }}</p>
			    	<p><small>identificador: {{ $data->id }}</small></p>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
	{{-- opciones del turno --}}
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			@if(Session::has('mensaje_error'))
			<div class="alert alert-dismissable alert-danger">
			  	<button type="button" class="close" data-dismiss="alert">×</button>
	            {{ Session::get('mensaje_error') }}
			</div>
	        @endif
			{{ Form::open(['route' => ['turno.destroy', $data->id], 'method' => 'DELETE']) }}
			<button class="btn btn-danger">Eliminar</button>
		</div>
		<div class="col-md-3"></div>
	</div>
</section>

@stop