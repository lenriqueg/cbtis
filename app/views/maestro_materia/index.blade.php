@extends('hello')

@section('section')

<section class="container text-center">
	<a href="{{ route('cmm.new', $id) }}" class="icon-link" data-toggle="tooltip" data-placement="bottom" title="Nuevo">
		<i class="fa fa-plus-circle"></i>
	</a>
</section>

<section class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-bordered table-hover table-striped">
				<caption class="text-uppercase">
					<button class="btn btn-success btn-sm" type="text">
						Total materias <span class="badge">{{ count($data) }}</span>
					</button>
				</caption>
				<thead>
					<tr>
						<th class="text-center">Nombre</th>
						<th class="text-center">Materia</th>
						<th class="text-center">Ciclo</th>
						<th class="text-center">Opciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($data as $d)
					<tr>
						<td>{{ $d->nombres }}</td>
						<td>{{ $d->materia }}</td>
						<td>{{ $d->ciclo }}</td>
						<td class="text-center">
							{{ Form::open([ 'route' => ['cmm.destroy', $d->id, $d->m_id], 'method' => 'DELETE']) }}
								<button class="btn btn-danger btn-sm">
									<i class="fa fa-trash-o"></i>
								</button>
							{{ Form::close() }}
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