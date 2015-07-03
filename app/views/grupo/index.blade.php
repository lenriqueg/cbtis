@extends('hello')

@section('section')

<section class="container text-center">
	<a href="{{ route('grupo.new', $id) }}" class="icon-link" data-toggle="tooltip" data-placement="bottom" title="Nuevo Grupo">
		<i class="fa fa-plus-circle"></i>
	</a>
</section>
<section class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-bordered table-hover table-striped">
				<caption class="text-uppercase">grupos del CBTIS #251</caption>
				<thead>
					<tr>
						<th class="text-center">Grupo</th>
						<th class="text-center">Turno</th>
						<th class="text-center">Semestre</th>
						<th class="text-center">Opciones</th>
						<th class="text-center">Carrera</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $d)
					<tr>
						<td>{{ $d->grupo }}</td>
						<td>{{ $d->turno->turno }}</td>
						<td>{{ $d->semestre->semestre }}</td>
						<td class="text-center">
							<a href="{{ action('GrupoController@show', $d->id) }}">
								<i class="fa fa-cog" data-toggle="tooltip" data-placement="bottom" title="Mas opciones"></i>
							</a>
						</td>
						<td>{{ $d->carrera->carrera }}</td>
					</tr>

					@endforeach
				</tbody>
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>
</section>

@stop