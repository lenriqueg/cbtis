@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Descripción</div>
				<div class="panel-body">
					<p><strong>Grupo:</strong> {{ $grupo->grupo }}</p>
					<p><strong>Especialidad:</strong> {{ $grupo->carrera->carrera }}</p>
					<p><strong>Semestre:</strong> {{ $grupo->semestre->semestre }}</p>
					<p><strong>Turno:</strong> {{ $grupo->turno->turno }}</p>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-sm-6 col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">Grupo - Materia</div>
				<div class="panel-body">
					{{ Form::open(['route' => 'gm.post'], ['class' => 'form']) }}
					<div class="form-group">
						{{ Form::label('materia_id', 'Agregar materia') }}
						<select name="materia_id" class="form-control">
							@foreach ($materia as $d)
							<option value="{{ $d->id }}">{{ $d->materia }}</option>
							@endforeach
						</select>
						{{ Form::hidden('id', $grupo->id) }}
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
					{{$errors->first('materia_id', '<p class="text-danger">:message</p>')}}
					{{$errors->first('id', '<p class="text-danger">:message</p>')}}
					@if(Session::has('mensaje_error'))
					<div class="alert alert-dismissable alert-danger">
					  	<button type="button" class="close" data-dismiss="alert">×</button>
			            {{ Session::get('mensaje_error') }}
					</div>
			     	@endif
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</section>

@stop