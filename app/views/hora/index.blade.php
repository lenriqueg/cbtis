@extends('hello')

@section('section')

<section class="container text-center">
	<a href="{{ route('hora.new') }}" class="icon-link" data-toggle="tooltip" data-placement="bottom" title="Nueva hora">
		<i class="fa fa-plus-circle"></i>
	</a>
</section>
<section class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-bordered table-hover table-striped">
				<caption class="text-uppercase">horas de clases del CBTIS #251</caption>
				<thead>
					<tr>
						<th class="text-center">Hora</th>
						<th class="text-center">Opciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $d)
						<tr>
							<td>{{$d->hora}}</td>
							<td class="text-center">
								<a href="{{ action('hora.show', $d->id) }}">
									<i class="fa fa-cog" data-toggle="tooltip" data-placement="bottom" title="Mas opciones"></i>
								</a>
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