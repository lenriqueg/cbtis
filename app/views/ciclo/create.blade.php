@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-sm-6 col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">Nuevo ciclo</div>
				<div class="panel-body">
					{{ Form::open(['route' => 'ciclo.new'], ['class' => 'form']) }}
					<div class="form-group">
						{{ Form::label('ciclo', 'Ciclo') }}
						{{ Form::text('ciclo', null, ['class' => 'form-control', 'placeholder' => 'año del ciclo']) }}
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
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Guardar</button>
						<a href="{{route('ciclos')}}" class="btn btn-danger">Cancelar</a>
					</div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">Errores</div>
				<div class="panel-body text-danger">
					{{ $errors->first('ciclo', '<p class="text-danger">:message</p>')}}
					{{$errors->first('periodo', '<p class="text-danger">:message</p>')}}
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</section>

@stop