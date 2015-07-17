@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-sm-6 col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">Actualizar aula</div>
				<div class="panel-body">
					{{ Form::open(['route' => ['aula.put', $data->id], 'method' => 'PUT'], ['class' => 'form']) }}
						<div class="form-group">
							<label for="aula">Nuevo nombre del aula</label>
							{{ Form::text('aula', $data->aula, ['class' => 'form-control', 'placeholder' => 'Nuevo nombre de aula']) }}
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
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">Errores</div>
				<div class="panel-body text-danger">
					{{ $errors->first('aula', ':message')}}
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</section>

@stop