@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			{{ Form::open(['route' => ['aula.put', $data->id], 'method' => 'PUT'], ['class' => 'form']) }}
				<div class="form-group">
					<label for="aula">Nuevo nombre del aula</label>
					{{ Form::text('aula', $data->aula, ['class' => 'form-control', 'placeholder' => 'Nuevo nombre de aula']) }}
					{{ $errors->first('aula', '<p class="text-danger">:message</p>')}}
				</div>
				<div class="form-group">
					<label for="descripcion">Descripción</label>
					{{ Form::textarea('descripcion', $data->descripcion, ['class' => 'form-control', 'placeholder' => 'descripcion']) }}
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