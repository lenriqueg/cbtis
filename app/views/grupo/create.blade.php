@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-sm-6 col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">Nuevo grupo</div>
				<div class="panel-body">
					{{ Form::open(['route' => 'grupo.post'], ['class' => 'form']) }}
					<div class="form-group">
						{{ Form::label('grupo', 'Grupo') }}
						{{ Form::text('grupo', null, ['class' => 'form-control', 'placeholder' => 'nombre del grupo']) }}
					</div>
					<div class="form-group">
						{{ Form::label('carrera_id', 'Carrera') }}
						<input type="text" class="form-control" value="{{ $data->carrera }}" readonly>
						{{ Form::hidden('carrera_id', $data->id, ['class' => 'form-control']) }}
					</div>
					<div class="form-group">
						{{ Form::label('turno_id', 'Turno') }}
						<select name="turno_id" class="form-control">
							@foreach ($turno as $d)
							<option value="{{ $d->id }}">{{ $d->turno }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						{{ Form::label('semestre_id', 'Semestre') }}
						<select name="semestre_id" class="form-control">
							@foreach ($semestre as $d)
								<option value="{{ $d->id }}">{{ $d->semestre }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<button class="btn btn-info">Guardar</button>
					</div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">Errores</div>
				<div class="panel-body text-danger">
					{{ $errors->first('grupo', '<p class="text-danger">:message</p>')}}
					{{$errors->first('carrera_id', '<p class="text-danger">:message</p>')}}
					{{$errors->first('turno_id', '<p class="text-danger">:message</p>')}}
					{{$errors->first('semestre_id', '<p class="text-danger">:message</p>')}}
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</section>

@stop