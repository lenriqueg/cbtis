@extends('hello')

@section('section')
<section class="container text-center">
	<a href="{{ route('dias') }}" class="icon-link" data-toggle="tooltip" data-placement="bottom" title="Atras">
		<i class="fa fa-arrow-circle-left"></i>
	</a>
	<a href="{{ route('dia.new') }}" class="icon-link" data-toggle="tooltip" data-placement="bottom" title="Nuevo dia">
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
			    	<p><strong>Dia: </strong>{{ $data->dia }}</p>
			    	<p><strong>identificador: </strong>{{ $data->id }}</p>
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