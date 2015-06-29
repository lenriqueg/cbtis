@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			{{ Form::open(['route' => 'esp.new'], ['class' => 'form']) }}
			<div class="form-group">
				{{ Form::label('carrera', 'Especialidad') }}
				{{ Form::text('carrera', null, ['class' => 'form-control', 'placeholder' => 'nombre del carrera']) }}
				{{ $errors->first('carrera', '<p class="text-danger">:message</p>')}}
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