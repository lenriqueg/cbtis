@extends('horario/index')

@section('section')

<div class="container">
	<h2 class="text-center">Grupos</h2>
	<h2 class="text-center">Matutino</h2>
	<div class="groups">
	@foreach ($data as $d)
	@if ($d->turno == 'matutino')
		<div class="group animated fadeIn">
			<p class="group__name">Grupo: {{ $d->grupo }}</p>
			<div class="group--footer">
				<a href="{{ route('hr', [$d->c_id, $d->g_id] ) }}" class="group--footer__link">
					{{ $d->turno }}
				</a>
			</div>
		</div>
	@endif
	@endforeach
	</div>

	<h2 class="text-center">Vespertino</h2>
	<div class="groups">
	@foreach ($data as $d)
	@if ($d->turno == 'vespertino')
		<div class="group animated fadeIn">
			<p class="group__name">Grupo: {{ $d->grupo }}</p>
			<div class="group--footer">
				<a href="{{ route('hr', [$d->c_id, $d->g_id] ) }}" class="group--footer__link">
					{{ $d->turno }}
				</a>
			</div>
		</div>
	@endif
	@endforeach
	</div>
</div>

@stop