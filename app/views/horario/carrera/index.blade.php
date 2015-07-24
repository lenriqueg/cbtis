@extends('horario/index');

@section('section')

<div class="container">
	<h2 class="text-center">Lista de especialidades</h2>
	<div class="groups">
	@foreach ($data as $d)
		<div class="group animated fadeIn">
			<p class="group__name">{{ $d->carrera }}</p>
			<div class="group--footer">
				<a href="{{{ route('hr.car.gr', $d->id) }}}" class="group--footer__link">
					Grupos
				</a>
			</div>
		</div>
	@endforeach
	</div>
</div>

@stop