@extends('hello')

@section('section')

<section class="container">
    <div class="row">
        <a href="" data-toggle="tooltip" data-placement="bottom" title="Añadir nueva materia">
            <span class="glyphicon glyphicon-plus-sign text-primary"></span>
        </a>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <table class="table table-bordered table-hover table-striped">
                <caption class="text-uppercase">Materias del cbtis #251</caption>
                <thead>
                <tr>
                    <th class="text-center">Materia</th>
                    <th class="text-center">Horas practicas</th>
                    <th class="text-center">Horas teoricas</th>
                    <td class="text-center">Opciones</td>
                    <th class="text-center">Estado</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $d)
                <tr>
                    <td>{{$d->materia}}</td>
                    <td>{{$d->hrs_practicas}}</td>
                    <td>{{$d->hrs_teoricas}}</td>
                    <td class="text-center">
                        <a href="{{ route('mat.show', $d->id) }}">
                            <i class="fa fa-cog" data-toggle="tooltip" data-placement="bottom" title="Mas opciones"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        @if ($d->status == 1)
                        <i class="fa fa-dot-circle-o text-success" data-toggle="tooltip" data-placement="bottom" title="Maestro activo"></i>
                        @else
                        <i class="fa fa-ban text-danger" data-toggle="tooltip" data-placement="bottom" title="Materia no activo"></i>
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