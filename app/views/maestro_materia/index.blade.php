@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<a href="" data-toggle="tooltip" data-placement="bottom" title="Añadir nuevo grupo">
			<span class="glyphicon glyphicon-plus-sign text-primary"></span>
		</a>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-bordered table-hover table-striped">
				<caption class="text-uppercase">
					Maestro: {{ $data->nombres }}
					Total de materias: {{ count($data->materia) }}
				</caption>
				<thead>
					<tr>
						<th class="text-center">Materia</th>
						<th class="text-center">Ciclo</th>
						<th class="text-center">Opciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data->materia as $d)
					<tr>
						<td>{{ $d->materia }}</td>
						@foreach ($data->ciclo as $d)
						<td>{{ $d->ciclo }}</td>
						<td>
							@if ($d->status == 1)
								<span class="glyphicon glyphicon-record text-success" data-toggle="tooltip" data-placement="bottom" title="Ciclo actual activo"></span>
							@else
								<span class="glyphicon glyphicon-ban-circle text-danger" data-toggle="tooltip" data-placement="bottom" title="Ciclo no activo"></span>
							@endif
						</td>
						@endforeach
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>
</section>

@stop