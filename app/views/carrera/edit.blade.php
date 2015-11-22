@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-sm-6 col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">Actualizar especialidad</div>
				<div class="panel-body">
					{{ Form::open(['route' => ['esp.put', $data->id], 'method' => 'PUT'], ['class' => 'form']) }}
						<div class="form-group">
							<label for="carrera">Nuevo nombre de la especialidad</label>
							{{ Form::text('carrera', $data->carrera, ['class' => 'form-control', 'placeholder' => 'Nombre de la especialidad']) }}
						</div>
						<div class="form-group">
							<button class="btn btn-primary">Guardar</button>
							<a href="{{route('especialidades')}}" class="btn btn-danger">Cancelar</a>
						</div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">Errores</div>
				<div class="panel-body text-danger">
					{{ $errors->first('carrera', ':message')}}
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</section>

@stop