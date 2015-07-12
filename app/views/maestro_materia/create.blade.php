@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h1>Maestro: {{ $maestro->nombres }}</h1>
			<p>
				<strong>Asigne materias al maestro</strong>
			</p>
			{{ Form::open(['route' => 'cmm.post'], ['class' => 'form']) }}
			<div class="form-group">
				{{ Form::label('materia_id', 'Materia') }}
				<select name="materia_id" class="form-control">
					@foreach ($materia as $d)
					<option value="{{ $d->id }}">{{ $d->materia }}</option>
					@endforeach
				</select>
				{{$errors->first('materia_id', '<p class="text-danger">:message</p>')}}
				{{$errors->first('id', '<p class="text-danger">:message</p>')}}
				{{ Form::hidden('id', $maestro->id) }}
			</div>
			<div class="form-group">
				@foreach ($ciclo as $d)
				{{ Form::hidden('ciclo_id', $d->id) }}
				@endforeach
				{{$errors->first('ciclo_id', '<p class="text-danger">:message</p>')}}
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