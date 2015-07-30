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
			<h3 class="text-center text-uppercase">grupos del cbtis #251</h3>
			<table class="table table-bordered table-hover table-striped">
				<caption>
					<button class="btn btn-primary btn-sm" type="text">
						Total grupos <span class="badge">{{ $data->getTotal() }}</span>
					</button>
				</caption>
				<thead>
					<tr>
						<th class="text-center">Grupo</th>
						<th class="text-center">Turno</th>
						<th class="text-center">Semestre</th>
						<th class="text-center">Opciones</th>
						<th class="text-center">Carrera</th>
						<th class="text-center">Status</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $d)
					<tr>
						<td>{{ $d->grupo }}</td>
						<td>{{ $d->turno }}</td>
						<td>{{ $d->semestre }}</td>
						<td class="text-center">
							<a href="{{ action('GrupoController@show', $d->g_id) }}">
								<i class="fa fa-cog" data-toggle="tooltip" data-placement="bottom" title="Mas opciones"></i>
							</a>
						</td>
						<td>{{ $d->carrera }}</td>
						<td class="text-center">
							@if ($d->status == 1)
							<i class="fa fa-dot-circle-o text-success" data-toggle="tooltip" data-placement="bottom" title="Grupo activo"></i>
							@else
							<i class="fa fa-ban text-danger" data-toggle="tooltip" data-placement="bottom" title="Grupo no activo"></i>
							@endif
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{{ $data->links() }}
		</div>
		<div class="col-md-2"></div>
	</div>
</section>

@stop