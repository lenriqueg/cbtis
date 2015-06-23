@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Descripcion</div>
				<div class="panel-body">
			    	<p>{{ $data->ciclo }}</p>
			    	<p><small>identificador: {{ $data->id }}</small></p>
			    	@if ($data->status == 1)
					<small>Activado</small>
			    	<span class="glyphicon glyphicon-record text-success" data-toggle="tooltip" data-placement="bottom" title="Ciclo actual activo"></span>
			    	@else
		    		<p>
		    			<small>Desactivado</small>
		    			<span class="glyphicon glyphicon-ban-circle text-danger" data-toggle="tooltip" data-placement="bottom" title="Ciclo no activo"></span>
		    		</p>
			    	@endif
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
	{{-- opciones del ciclo --}}
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			@if ($data->status == 1)
			<button class="btn btn-warning">Desactivar</button>
			@else
			<button class="btn btn-success">Activar</button>
			@endif
			<button class="btn btn-danger">Eliminar</button>
		</div>
		<div class="col-md-3"></div>
	</div>
</section>

@stop