@extends('hello')

@section('section')

<section class="container text-center">
	<a href="{{ route('dia.new') }}" class="icon-link" data-toggle="tooltip" data-placement="bottom" title="Nuevo dia de clases">
		<i class="fa fa-plus-circle"></i>
	</a>
</section>

<section class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h3 class="text-center text-uppercase">dias de clases del cbtis #251</h3>
			<table class="table table-bordered table-hover table-striped">
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