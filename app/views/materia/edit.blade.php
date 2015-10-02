@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-sm-6 col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">Actualizar materia</div>
				<div class="panel-body">
					{{ Form::open(['route' => ['mat.put', $data->id], 'method' => 'PUT'], ['class' => 'form']) }}
						<div class="form-group">
							<label for="materia">Nombre de la materia</label>
							{{ Form::text('materia', $data->materia, ['class' => 'form-control', 'placeholder' => 'Nuevo nombre']) }}
						</div>
						<div class="form-group">
							{{ Form::label('hrs_practicas', 'Horas practicas') }}
							{{ Form::text('hrs_practicas', $data->hrs_practicas, ['class' => 'form-control']) }}
						</div>
						<div class="form-group">
							{{ Form::label('hrs_teoricas', 'Horas teoricas') }}
							{{ Form::text('hrs_teoricas', $data->hrs_teoricas, ['class' => 'form-control']) }}
						</div>
						<div class="form-group">
							{{ Form::label('color', 'Color') }}
							{{ Form::text('color', $data->color) }}
							<p class="color">
								<button type="button" onclick="changeColor()" class="btn">Agregar un color</button>
							</p>
						</div>
						<div class="form-gropup">
							<button class="btn btn-primary">Actualizar</button>
						</div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">Errores</div>
				<div class="panel-body text-danger">
					{{ $errors->first('materia', '<p class="text-danger">:message</p>')}}
					{{ $errors->first('hrs_practicas', '<p class="text-danger">:message</p>')}}
					{{ $errors->first('hrs_teoricas', '<p class="text-danger">:message</p>')}}
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</section>

@stop

@section('script')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.4.0/randomColor.js"></script>
	<script>
		function changeColor()
		{
			var color = randomColor({luminosity: 'light'})
			$('.color').css('background', color)
			$('input[name=color]').val(color)
		}
	</script>
@endsection