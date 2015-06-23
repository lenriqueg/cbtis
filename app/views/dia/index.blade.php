@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<a href="" data-toggle="tooltip" data-placement="bottom" title="Añadir nuevo dia">
			<span class="glyphicon glyphicon-plus-sign text-primary"></span>
		</a>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-bordered table-hover table-striped">
				<caption class="text-uppercase">dias de clases del CBTIS #251</caption>
				<thead>
					<tr>
						<th class="text-center">Dia</th>
						<th class="text-center">Opciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $d)
						<tr>
							<td>{{$d->dia}}</td>
							<td class="text-center">
								<a href="{{ action('DiaController@show', $d->id) }}">
									<span class="glyphicon glyphicon-cog" data-toggle="tooltip" data-placement="bottom" title="Mas opciones"></span>
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