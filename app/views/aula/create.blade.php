@extends('hello')

@section('section')
<section class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-sm-6 col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">Nueva aula</div>
				<div class="panel-body">
					{{ Form::open(['route' => 'aula.new'], ['class' => 'form']) }}
					<div class="form-group">
						{{ Form::label('aula', 'Aula') }}
						{{ Form::text('aula', null, ['class' => 'form-control', 'placeholder' => 'nombre del aula']) }}
					</div>
					<div class="form-group">
						{{ Form::label('descripcion', 'Descripción') }}
						{{ Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Escriba una descripción del aula']) }}
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Guardar</button>
						<a href="{{route('aulas')}}" class="btn btn-danger">Cancelar</a>
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