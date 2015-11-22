@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-sm-6 col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">Nuevo turno</div>
				<div class="panel-body">
					{{ Form::open(['route' => 'turno.new'], ['class' => 'form']) }}
					<div class="form-group">
						{{ Form::label('turno', 'Turno') }}
						{{ Form::text('turno', null, ['class' => 'form-control', 'placeholder' => 'turno']) }}
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Guardar</button>
						<a href="{{route('turnos')}}" class="btn btn-danger">Cancelar</a>
					</div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">Errores</div>
				<div class="panel-body text-danger">
					{{ $errors->first('turno', ':message')}}
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</section>

@stop