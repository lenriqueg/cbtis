@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-sm-6 col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">Nueva materia</div>
				<div class="panel-body">
					{{ Form::open(['route' => 'mat.new'], ['class' => 'form']) }}
					<div class="form-group">
						{{ Form::label('materia', 'Materia') }}
						{{ Form::text('materia', null, ['class' => 'form-control', 'placeholder' => 'materia']) }}
					</div>
					<div class="form-group">
						{{ Form::label('hrs_practicas', 'Horas practicas') }}
						{{ Form::text('hrs_practicas', null, ['class' => 'form-control', 'placeholder' => 'horas practicas']) }}
					</div>
					<div class="form-group">
						{{ Form::label('hrs_teoricas', 'Horas practicas') }}
						{{ Form::text('hrs_teoricas', null, ['class' => 'form-control', 'placeholder' => 'horas teoricas']) }}
					</div>
					<div class="form-group">
						{{ Form::label('color', 'Color') }}
						{{ Form::hidden('color', null) }}
						<p class="color">
							<button type="button" onclick="changeColor()" class="btn">Agregar un color</button>
						</p>
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
					{{ $errors->first('materia', '<p class="text-danger">:message</p>')}}
					{{ $errors->first('hrs_practicas', '<p class="text-danger">:message</p>')}}
					{{ $errors->first('hrs_teoricas', '<p class="text-danger">:message</p>')}}
					{{ $errors->first('color', '<p class="text-danger">:message</p>')}}
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