@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			{{ Form::open(['route' => ['esp.put', $data->id], 'method' => 'PUT'], ['class' => 'form']) }}
				<div class="form-group">
					<label for="carrera">Nuevo nombre de la especialidad</label>
					{{ Form::text('carrera', $data->carrera, ['class' => 'form-control', 'placeholder' => 'Nombre de la especialidad']) }}
					{{ $errors->first('carrera', '<p class="text-danger">:message</p>')}}
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Guardar</button>
				</div>
			{{ Form::close() }}
		</div>
		<div class="col-md-3"></div>
	</div>
</section>

@stop