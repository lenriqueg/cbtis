@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			{{ Form::open(['route' => 'sem.new'], ['class' => 'form']) }}
			<div class="form-group">
				{{ Form::label('semestre', 'Semestre') }}
				{{ Form::text('semestre', null, ['class' => 'form-control', 'placeholder' => 'semestre']) }}
				{{ $errors->first('semestre', '<p class="text-danger">:message</p>')}}
			</div>
			<div class="form-group">
				<button class="btn btn-info">Guardar</button>
			</div>
			{{ Form::close() }}
		</div>
		<div class="col-md-3"></div>
	</div>
</section>

@stop