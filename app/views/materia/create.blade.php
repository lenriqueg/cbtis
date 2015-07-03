@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			{{ Form::open(['route' => 'mat.new'], ['class' => 'form']) }}
			<div class="form-group">
				{{ Form::label('materia', 'Materia') }}
				{{ Form::text('materia', null, ['class' => 'form-control', 'placeholder' => 'materia']) }}
				{{ $errors->first('materia', '<p class="text-danger">:message</p>')}}
			</div>
			<div class="form-group">
				{{ Form::label('hrs_practicas', 'Horas practicas') }}
				{{ Form::text('hrs_practicas', null, ['class' => 'form-control', 'placeholder' => 'horas practicas']) }}
				{{ $errors->first('hrs_practicas', '<p class="text-danger">:message</p>')}}
			</div>
			<div class="form-group">
				{{ Form::label('hrs_teoricas', 'Horas practicas') }}
				{{ Form::text('hrs_teoricas', null, ['class' => 'form-control', 'placeholder' => 'horas teoricas']) }}
				{{ $errors->first('hrs_teoricas', '<p class="text-danger">:message</p>')}}
			</div>
			<div class="form-group">
				<button class="btn btn-info">Guardar</button>
			</div>
			{{ Form::close() }}
		</div>
		<div class="col-md-3"></div>
	</div>
</section>

@stop