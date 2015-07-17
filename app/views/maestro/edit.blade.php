@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-sm-6 col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">Nuevo ciclo</div>
				<div class="panel-body">
					{{ Form::open(['route' => ['mtr.put', $data->id], 'method' => 'PUT'], ['class' => 'form']) }}
						<div class="form-group">
							<label for="aula">Nuevo nombre del maestro</label>
							{{ Form::text('nombres', $data->nombres, ['class' => 'form-control', 'placeholder' => 'Nuevo nombre']) }}
						</div>
						<div class="form-gropup">
							<button class="btn btn-primary">Actualizar</button>
						</div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">Errores</div>
				<div class="panel-body text-danger">
					{{ $errors->first('nombres', '<p class="text-danger">:message</p>')}}
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</section>

@stop