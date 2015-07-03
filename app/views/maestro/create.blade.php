@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			{{ Form::open(['route' => 'mtr.new'], ['class' => 'form']) }}
			<div class="form-group">
				{{ Form::label('clave', 'Clave') }}
				{{ Form::text('clave', null, ['class' => 'form-control', 'placeholder' => 'Clave del maestro']) }}
				{{ $errors->first('clave', '<p class="text-danger">:message</p>')}}
			</div>
			<div class="form-group">
				{{ Form::label('nombres', 'Nombre del maestro') }}
				{{ Form::text('nombres', null, ['class' => 'form-control', 'placeholder' => 'nombres']) }}
				{{ $errors->first('nombres', '<p class="text-danger">:message</p>')}}
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