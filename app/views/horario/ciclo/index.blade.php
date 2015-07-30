@extends('horario/index')

@section('section')

<div class="container animated fadeIn">
	<h2 class="text-center">Ciclo Actual</h2>
	<div class="groups">
	@foreach ($ciclo as $d)
		<div class="group">
			<p class="group__name">{{ $d->ciclo }}</p>
			<div class="group--footer">
			</div>
		</div>
	@endforeach
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			{{ Form::open(['route' => 'grupo.put', 'method' => 'PUT']) }}
			@foreach ($semestre as $d)
				<div class="form-group">
					<label>
						{{ $d->semestre }}
						<input type="checkbox" name="semestre[]" value="{{ $d->id }}">
					</label>
				</div>				
			@endforeach
				<div class="form-group">
					<button>Empezar</button>
				</div>
			{{ Form::close() }}
		</div>
		<div class="col-md-3"></div>
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<p class="alert alert-warning"> 
				Si el ciclo es correcto por favor proceda con los horarios
			</p>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>

@stop