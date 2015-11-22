@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-sm-6 col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">Nuevo maestro</div>
				<div class="panel-body">
					{{ Form::open(['route' => 'mtr.new'], ['class' => 'form']) }}
					<div class="form-group">
						{{ Form::label('clave', 'Clave') }}
						{{ Form::text('clave', null, ['class' => 'form-control', 'placeholder' => 'Clave del maestro']) }}
					</div>
					<div class="form-group">
						{{ Form::label('nombres', 'Nombre del maestro') }}
						{{ Form::text('nombres', null, ['class' => 'form-control', 'placeholder' => 'nombres']) }}
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Guardar</button>
						<a href="{{route('maestros')}}" class="btn btn-danger">Cancelar</a>
					</div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">Errores</div>
				<div class="panel-body text-danger">
					{{ $errors->first('clave', '<p class="text-danger">:message</p>')}}
					{{ $errors->first('nombres', '<p class="text-danger">:message</p>')}}
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</section>

@stop