@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			{{ Form::open(['route' => 'grupo.new'], ['class' => 'form']) }}
			<div class="form-group">
				{{ Form::label('grupo', 'Grupo') }}
				{{ Form::text('grupo', null, ['class' => 'form-control', 'placeholder' => 'nombre del grupo']) }}
				{{ $errors->first('grupo', '<p class="text-danger">:message</p>')}}
			</div>
			<div class="form-group">
				{{ Form::label('carrera_id', 'Carrera') }}
				{{ Form::text('carrera_id', 'carrera', ['class' => 'form-control', 'disabled']) }}
			</div>
			<div class="form-group">
				{{ Form::label('turno_id', 'Turno') }}
				<select name="turno_id" class="form-control">
					<option value=""></option>
				</select>
				{{$errors->first('turno_id', '<p class="text-danger">:message</p>')}}
			</div>
			<div class="form-group">
				{{ Form::label('semestre_id', 'Semestre') }}
				<select name="semester_id" class="form-control">
					<option value=""></option>
				</select>
				{{$errors->first('periodo', '<p class="text-danger">:message</p>')}}
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