@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Descripción</div>
				<div class="panel-body">
			    	<p>Carrera: {{ $data->carrera }}</p>
			    	<p><small>identificador: {{ $data->id }}</small></p>
			    	@if ($data->status == 1)
					<small>Activado</small>
					<i class="fa fa-dot-circle-o text-success" data-toggle="tooltip" data-placement="bottom" title="Especialidad activa"></i>
			    	@else
		    		<p>
		    			<small>Desactivado</small>
		    			<i class="fa fa-ban text-danger" data-toggle="tooltip" data-placement="bottom" title="Especialidad no activa"></i>
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
			@if(Session::has('mensaje_error'))
			<div class="alert alert-dismissable alert-info">
			  	<button type="button" class="close" data-dismiss="alert">×</button>
	            {{ Session::get('mensaje_error') }}
			</div>
	        @endif
			<table>
				<tbody>
					<tr>
						<td>
							<a href="{{ URL::route('esp.edit', $data->id) }}">
								<button class="btn btn-info">Actualizar</button>
							</a>
						</td>
						<td>
							@if ($data->status == 1)
							{{ Form::open(['route' => ['esp.status', $data->id], 'method' => 'PUT']) }}
							<button class="btn btn-warning">Desactivar</button>
							{{ Form::close() }}
							@else
							{{ Form::open(['route' => ['esp.status', $data->id], 'method' => 'PUT']) }}
							<button class="btn btn-success">Activar</button>
							{{ Form::close() }}
							@endif
						</td>
						<td>
							{{ Form::open(['route' => ['esp.destroy', $data->id], 'method' => 'DELETE']) }}
								<button class="btn btn-danger">Eliminar</button>
							{{ Form::close() }}
						</td>
					</tr>
				</tbody>
			</table>
			
			
			
		</div>
		<div class="col-md-3"></div>
	</div>
</section>

@stop