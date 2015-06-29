@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			{{ Form::open(['route' => 'aula.new'], ['class' => 'form']) }}
			<div class="form-group">
				{{ Form::label('aula', 'Aula') }}
				{{ Form::text('aula', null, ['class' => 'form-control', 'placeholder' => 'nombre del aula']) }}
				{{ $errors->first('aula', '<p class="text-danger">:message</p>')}}
			</div>
			<div class="form-group">
				{{ Form::label('descripcion', 'Descripción') }}
				{{ Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Escriba una descripción de la ubicacion del aula aunque no es una información requerida']) }}
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