@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Descripcion</div>
				<div class="panel-body">
		    		<p>Grupo: {{ $data->grupo }}</p>
		    		<p><small>Turno: {{ $data->turno->turno }}</small></p>
		    		<p><small>Semestre: {{ $data->semestre->semestre }}</small></p>
		    		<p>Carrera: {{ $data->carrera->carrera }}</p>
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