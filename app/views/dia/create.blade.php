@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			{{ Form::open(['route' => 'dia.new'], ['class' => 'form']) }}
			<div class="form-group">
				{{ Form::label('dia', 'Dia') }}
				{{ Form::text('dia', null, ['class' => 'form-control', 'placeholder' => 'dia']) }}
				{{ $errors->first('dia', '<p class="text-danger">:message</p>')}}
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