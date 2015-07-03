@extends('hello')

@section('section')

<section class="container text-center">
    <a href="{{ route('mtr.new') }}" class="icon-link" data-toggle="tooltip" data-placement="bottom" title="Nuevo maestro">
        <i class="fa fa-plus-circle"></i>
    </a>
</section>

<section class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <table class="table table-bordered table-hover table-striped">
                <caption class="text-uppercase">Maestros del cbtis #251</caption>
                <thead>
                <tr>
                    <th class="text-center">Clave</th>
                    <th class="text-center">Maestro</th>
                    <th class="text-center">Opciones</th>
                    <th class="text-center">Estado</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $d)
                <tr>
                    <td>{{$d->clave}}</td>
                    <td>{{$d->nombres}}</td>
                    <td class="text-center">
                        <a href="{{ route('mtr.show', $d->id) }}">
                            <i class="fa fa-cog" data-toggle="tooltip" data-placement="bottom" title="Mas opciones"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        @if ($d->status == 1)
                        <i class="fa fa-dot-circle-o text-success" data-toggle="tooltip" data-placement="bottom" title="Maestro activo"></i>
                        @else
                        <i class="fa fa-ban text-danger" data-toggle="tooltip" data-placement="bottom" title="Maestro no activo"></i>
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