@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			{{ Form::open(['route' => 'grupo.post'], ['class' => 'form']) }}
			<div class="form-group">
				{{ Form::label('grupo', 'Grupo') }}
				{{ Form::text('grupo', null, ['class' => 'form-control', 'placeholder' => 'nombre del grupo']) }}
				{{ $errors->first('grupo', '<p class="text-danger">:message</p>')}}
			</div>
			<div class="form-group">
				{{ Form::label('carrera_id', 'Carrera') }}
				<input type="text" class="form-control" value="{{ $data->carrera }}" readonly>
				{{ Form::hidden('carrera_id', $data->id, ['class' => 'form-control']) }}
				{{$errors->first('carrera_id', '<p class="text-danger">:message</p>')}}
			</div>
			<div class="form-group">
				{{ Form::label('turno_id', 'Turno') }}
				<select name="turno_id" class="form-control">
					@foreach ($turno as $d)
					<option value="{{ $d->id }}">{{ $d->turno }}</option>
					@endforeach
				</select>
				{{$errors->first('turno_id', '<p class="text-danger">:message</p>')}}
			</div>
			<div class="form-group">
				{{ Form::label('semestre_id', 'Semestre') }}
				<select name="semestre_id" class="form-control">
					@foreach ($semestre as $d)
						<option value="{{ $d->id }}">{{ $d->semestre }}</option>
					@endforeach
				</select>
				{{$errors->first('semestre_id', '<p class="text-danger">:message</p>')}}
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