@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Descripcion</div>
				<div class="panel-body">
			    	<p>Salón: {{ $data->aula }}</p>
			    	<p><small>identificador: {{ $data->id }}</small></p>
			    	<p><small>Descripcion: {{ $data->descripcion }}</small></p>
			    	@if ($data->status == 1)
			    	<p>
			    		<small>Activo</small>
						<i class="fa fa-dot-circle-o text-success" data-toggle="tooltip" data-placement="bottom" title="Salón activo"></i>
			    	</p>
					@else
					<p>
						<small>No activo</small>
						<i class="fa fa-ban text-danger" data-toggle="tooltip" data-placement="bottom" title="Salón no activo"></i>
					</p>
					@endif
					<p>Fecha de creacion: {{ $data->created_at }}</p>
					<p>Fecha de Actualizacion: {{ $data->updated_at }}</p>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
	{{-- opciones del aula --}}
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			@if(Session::has('mensaje_error'))
			<div class="alert alert-dismissable alert-danger">
			  	<button type="button" class="close" data-dismiss="alert">×</button>
	            {{ Session::get('mensaje_error') }}
			</div>
	        @endif
			<table>
				<tbody>
					<tr>
						<td>
							<a href="{{ action('AulaController@edit', $data->id) }}">
								<button class="btn btn-info">Actualizar</button>
							</a>
						</td>
						<td>
							@if ($data->status == 1)
							{{ Form::open(['route' => ['aula.status', $data->id], 'method' => 'PUT']) }}
								<button class="btn btn-warning">Desactivar</button>
							{{ Form::close() }}
							@else
							{{ Form::open(['route' => ['aula.status', $data->id], 'method' => 'PUT']) }}
								<button class="btn btn-success">Activar</button>
							{{ Form::close() }}
							@endif
						</td>
						<td>
							{{ Form::open(['route' => ['aula.destroy', $data->id], 'method' => 'DELETE']) }}
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