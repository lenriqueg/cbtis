@extends('hello')

@section('section')

<section class="container text-center">
	<a href="{{ route('aula.new') }}" class="icon-link" data-toggle="tooltip" data-placement="bottom" title="Nueva aula">
		<i class="fa fa-plus-circle"></i>
	</a>
</section>

<section class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-bordered table-hover table-striped">
				<caption class="text-uppercase">Aulas del CBTIS #251</caption>
				<thead>
					<tr>
						<th class="text-center">Aula</th>
						<th class="text-center">Descripcion</th>
						<th class="text-center">Opciones</th>
						<th class="text-center">Status</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $d)
						<tr>
							<td>{{$d->aula}}</td>
							<td>{{ $d->descripcion }}</td>
							<td class="text-center">
								<a href="{{ action('AulaController@show', $d->id) }}">
									<i class="fa fa-cog" data-toggle="tooltip" data-placement="bottom" title="Mas opciones"></i>
								</a>
							</td>
							<td class="text-center">
								@if ($d->status == 1)
								<i class="fa fa-dot-circle-o text-success" data-toggle="tooltip" data-placement="bottom" title="Salón activo"></i>
								@else
								<i class="fa fa-ban text-danger" data-toggle="tooltip" data-placement="bottom" title="Salón no activo"></i>
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