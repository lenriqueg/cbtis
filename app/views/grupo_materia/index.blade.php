@extends('hello')

@section('section')

<section class="container text-center">
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
				<caption class="text-uppercase">
					Grupo: {{ $data->grupo }}
					Total de materias: {{ count($data->materia) }}
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
							<a href="">
								<span class="glyphicon glyphicon-cog" data-toggle="tooltip" data-placement="bottom" title="Mas opciones"></span>
							</a>
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