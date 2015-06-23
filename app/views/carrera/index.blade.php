@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<a href="" data-toggle="tooltip" data-placement="bottom" title="Añadir nueva carrera">
			<span class="glyphicon glyphicon-plus-sign text-primary"></span>
		</a>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-bordered table-hover table-striped">
				<caption class="text-uppercase">Carreras del CBTIS #251</caption>
				<thead>
					<tr>
						<th class="text-center">Especialidades</th>
						<th class="text-center">Opciones</th>
						<th class="text-center">Estado</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $d)
						<tr>
							<td>{{$d->carrera}}</td>
							<td class="text-center">
								<a href="{{ action('CarreraController@show', $d->id) }}">
									<span class="glyphicon glyphicon-cog" data-toggle="tooltip" data-placement="bottom" title="Mas opciones"></span>
								</a>
							</td>
							<td class="text-center">
								@if ($d->status == 1)
									<span class="glyphicon glyphicon-record text-success" data-toggle="tooltip" data-placement="bottom" title="Carrera activo"></span>
								@else
									<span class="glyphicon glyphicon-ban-circle text-danger" data-toggle="tooltip" data-placement="bottom" title="Carrera no activo"></span>
								@endif
								
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{{$data->links()}}
		</div>
		<div class="col-md-2"></div>
	</div>
</section>

@stop