@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			{{ Form::open(['route' => ['mat.put', $data->id], 'method' => 'PUT'], ['class' => 'form']) }}
				<div class="form-group">
					<label for="materia">Nombre de la materia</label>
					{{ Form::text('materia', $data->materia, ['class' => 'form-control', 'placeholder' => 'Nuevo nombre']) }}
					{{ $errors->first('materia', '<p class="text-danger">:message</p>')}}
				</div>
				<div class="form-group">
					{{ Form::label('hrs_practicas', 'Horas practicas') }}
					{{ Form::text('hrs_practicas', $data->hrs_practicas, ['class' => 'form-control']) }}
					{{ $errors->first('hrs_practicas', '<p class="text-danger">:message</p>')}}
				</div>
				<div class="form-group">
					{{ Form::label('hrs_teoricas', 'Horas teoricas') }}
					{{ Form::text('hrs_teoricas', $data->hrs_teoricas, ['class' => 'form-control']) }}
					{{ $errors->first('hrs_practicas', '<p class="text-danger">:message</p>')}}
				</div>
				<div class="form-gropup">
					<button class="btn btn-success">Actualizar</button>
				</div>
			{{ Form::close() }}
		</div>
		<div class="col-md-3"></div>
	</div>
</section>

@stop