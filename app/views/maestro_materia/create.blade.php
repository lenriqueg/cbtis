@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-sm-6 col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Descripción</div>
				<div class="panel-body">
					<p><strong>Maestro:</strong> {{ $maestro->nombres }}</p>
				</div>	
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-sm-6 col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">Maestro - Materia</div>
				<div class="panel-body">
					{{ Form::open(['route' => 'cmm.post'], ['class' => 'form']) }}
					<div class="form-group">
						{{ Form::label('materia_id', 'Materia') }}
						<select name="materia_id" class="form-control">
							@foreach ($materia as $d)
							<option value="{{ $d->id }}">{{ $d->grupo }} - {{ $d->materia }}</option>
							@endforeach
						</select>
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
			    </div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">Errores</div>
				<div class="panel-body text-danger">
					@if(Session::has('mensaje_error'))
					<div class="alert alert-dismissable alert-danger">
					  	<button type="button" class="close" data-dismiss="alert">×</button>
			            {{ Session::get('mensaje_error') }}
					</div>
			        @endif
					{{$errors->first('materia_id', '<p class="text-danger">:message</p>')}}
					{{$errors->first('id', '<p class="text-danger">:message</p>')}}
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</section>

@stop