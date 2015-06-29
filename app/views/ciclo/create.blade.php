@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			{{ Form::open(['route' => 'ciclo.new'], ['class' => 'form']) }}
			<div class="form-group">
				{{ Form::label('ciclo', 'Ciclo') }}
				{{ Form::text('ciclo', null, ['class' => 'form-control', 'placeholder' => 'año del ciclo']) }}
				{{ $errors->first('ciclo', '<p class="text-danger">:message</p>')}}
			</div>
			<div class="form-group">
				<div class="radio">
						<label>
							<input type="radio" name="periodo" value=" Febrero - Julio">
							Febrero - Julio
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="periodo" value=" Agosto - Enero">
							Agosto - Enero
						</label>
					</div>
				{{$errors->first('periodo', '<p class="text-danger">:message</p>')}}
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