@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Descripción</div>
				<div class="panel-body">
		    		<p><strong>Grupo:</strong> {{ $data->grupo }}</p>
		    		<p><strong>Turno: </strong>{{ $data->turno->turno }}</p>
		    		<p><strong>Semestre: </strong>{{ $data->semestre->semestre }}</p>
		    		<p><strong>Carrera:</strong> {{ $data->carrera->carrera }}</p>
		    		@if ($data->status == 1)
			    	<p>
						<strong>Activado</strong>
			    		<i class="fa fa-dot-circle-o text-success" data-toggle="tooltip" data-placement="bottom" title="Grupo activo"></i>
			    	</p>
			    	@else
		    		<p>
		    			<strong>Desactivado</strong>
		    			<i class="fa fa-ban text-danger" data-toggle="tooltip" data-placement="bottom" title="Grupo no activo"></i>
		    		</p>
			    	@endif
		    		<a href="{{ action('GMController@index', $data->id) }}">ver materias</a>

				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
	{{-- opciones del grupo --}}
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
							{{ Form::open(['route' => ['grupo.destroy', $data->id], 'method' => 'DELETE']) }}
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