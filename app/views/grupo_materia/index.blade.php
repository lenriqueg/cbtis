@extends('hello')

@section('section')

<section class="container text-center">
	<a href="{{ route('grupos', $data->carrera_id) }}" class="icon-link" data-toggle="tooltip" data-placement="bottom" title="Atras">
		<i class="fa fa-arrow-circle-left"></i>
	</a>
	<a href="{{ route('gm.new', $data->id) }}" class="icon-link" data-toggle="tooltip" data-placement="bottom" title="Nuevo">
		<i class="fa fa-plus-circle"></i>
	</a>
</section>

<section class="container">
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-bordered table-hover table-striped">
				<caption>
					<button class="btn btn-primary btn-sm">
						Grupo <span class="badge">{{ $data->grupo }}</span>
						Total de materias: <span class="badge">{{ count($data->materia) }}</span>
					</button>
				</caption>
				<thead>
					<tr>
						<th class="text-center">Materia</th>
						<th class="text-center">Carrera</th>
						<th class="text-center">Opciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data->materia as $d)
					<tr>
						<td>{{ $d->materia }}</td>
						<td>{{ $data->carrera->carrera }}</td>
						<td class="text-center">
							{{ Form::open([ 'route' => ['gm.destroy', $data->id, $d->id], 'method' => 'DELETE']) }}
								<button class="btn btn-danger btn-sm">
									<i class="fa fa-trash-o"></i>
								</button>
							{{ Form::close() }}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>
</section>

@stop