@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h1>Grupo: {{ $grupo->grupo }}</h1>
			<h2>Especialidad: {{ $grupo->carrera->carrera }}</h2>
			<h3>Semestre: {{ $grupo->semestre->semestre }}</h3>
			<h3>Turno: {{ $grupo->turno->turno }}</h3>
			{{ Form::open(['route' => 'gm.post'], ['class' => 'form']) }}
			<div class="form-group">
				{{ Form::label('materia_id', 'Materia') }}
				<select name="materia_id" class="form-control">
					@foreach ($materia as $d)
					<option value="{{ $d->id }}">{{ $d->materia }}</option>
					@endforeach
				</select>
				{{$errors->first('materia_id', '<p class="text-danger">:message</p>')}}
				{{$errors->first('id', '<p class="text-danger">:message</p>')}}
				{{ Form::hidden('id', $grupo->id) }}
			</div>
			<div class="form-group">
				<button class="btn btn-info">Guardar</button>
			</div>
			{{ Form::close() }}
			@if(Session::has('mensaje_error'))
			<div class="alert alert-dismissable alert-danger">
			  	<button type="button" class="close" data-dismiss="alert">×</button>
	            {{ Session::get('mensaje_error') }}
			</div>
	        @endif
		</div>
		<div class="col-md-3"></div>
	</div>
</section>

@stop