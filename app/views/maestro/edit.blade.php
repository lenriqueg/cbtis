@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			{{ Form::open(['route' => ['mtr.put', $data->id], 'method' => 'PUT'], ['class' => 'form']) }}
				<div class="form-group">
					<label for="aula">Nuevo nombre del maestro</label>
					{{ Form::text('nombres', $data->nombres, ['class' => 'form-control', 'placeholder' => 'Nuevo nombre']) }}
					{{ $errors->first('nombres', '<p class="text-danger">:message</p>')}}
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