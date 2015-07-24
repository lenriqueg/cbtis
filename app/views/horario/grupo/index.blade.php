@extends('horario/index')

@section('section')

<div class="container">
	<h2 class="text-center">Grupos</h2>
	<div class="groups">
	@foreach ($data as $d)
		<div class="group animated fadeIn">
			<p class="group__name">Grupo: {{ $d->grupo }}</p>
			<div class="group--footer">
				<a href="{{{ route('hr.car.gr') }}}" class="group--footer__link">
					{{ $d->turno }}
				</a>
			</div>
		</div>
	@endforeach
	</div>
</div>

@stop