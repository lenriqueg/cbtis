@extends('horario/index')

@section('section')

<section class="container" ng-app="app">
	<div class="row">
		<h1 class="text-center">Horario</h1>
		<div class="col-md-3">
			<form action="" class="form-horizontal">
				<div class="form-group">
					<label for="" class="col-md-3 control-label">Ciclo:</label>
					<div class="col-md-9">
						{{ Form::text('ciclo_id', '2014', ['class' => 'form-control input-sm', 'readonly']) }}						
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-md-3 control-label">Dia:</label>
					<div class="col-md-9">
						<select name="hora_id" id="" class="form-control input-sm">
						@foreach ($hora as $d)
							<option value="{{ $d->id }}" >{{ $d->hora }}</option>
						@endforeach
						</select>
						
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-md-3 control-label">hora:</label>
					<div class="col-md-9">
						<select name="hora_id" id="" class="form-control input-sm">
						@foreach ($hora as $d)
							<option value="{{ $d->id }}" >{{ $d->hora }}</option>
						@endforeach
						</select>
						
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-md-3 control-label">materia:</label>
					<div class="col-md-9">
						<select name="materia_id" class="form-control input-sm">
						@foreach ($data as $d)
							<option value="{{ $d->id }}" >{{ $d->materia }}</option>
						@endforeach
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-md-3 control-label">Salon:</label>
					<div class="col-md-9">
						<select name="hora_id" id="" class="form-control input-sm">
						@foreach ($hora as $d)
							<option value="{{ $d->id }}" >{{ $d->hora }}</option>
						@endforeach
						</select>
						
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-9">
			<button class="btn btn-primary btn-block" id="#btn-horario">horario</button>
			<div id="horario">soy horario</div>
		</div>
	</div>
</section>

@stop

@section('scripts')

{{ HTML::script('js/vendor/angular.js') }}
{{ HTML::script('js/app.js') }}
{{ HTML::script('js/angular/controller/especialidad.js') }}
{{ HTML::script('js/angular/service/especialidadService.js') }}

@stop