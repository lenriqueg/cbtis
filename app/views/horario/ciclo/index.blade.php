@extends('horario/index')

@section('section')

<div class="container animated fadeIn">
	<h2 class="text-center">Ciclo Actual</h2>
	<div class="groups">
	@foreach ($data as $d)
		<div class="group">
			<p class="group__name">{{ $d->ciclo }}</p>
			<div class="group--footer">
				<a href="{{ route('hr.esp') }}" class="group--footer__link">
					Empezar	
				</a>
			</div>
		</div>
	@endforeach
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