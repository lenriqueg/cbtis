@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-sm-6 col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">Nuevo ciclo</div>
				<div class="panel-body">
					{{ Form::open(['route' => 'hora.new'], ['class' => 'form']) }}
					<div class="form-group">
						{{ Form::label('hora', 'Hora') }}
						{{ Form::text('hora', null, ['class' => 'form-control', 'placeholder' => 'hora']) }}
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Guardar</button>
					</div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">Errores</div>
				<div class="panel-body text-danger">
					{{ $errors->first('hora', ':message')}}
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</section>

@stop