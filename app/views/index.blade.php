@extends('hello')

@section('section')
    @if(!Auth::user())
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading text-uppercase">Iniciar sesion</div>
                <div class="panel-body">
                    {{ Form::open(['route' => 'login']) }}
                    <div class="form-group">
                        {{ Form::label('usuario', 'Usuario') }}
                        {{ Form::text('usuario', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('password', 'Password') }}
                        {{ Form::password('password', ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Entrar</button>
                    </div>
                    {{ Form::close() }}
                </div>
                @if(Session::has('mensaje_error'))
                    <div class="alert alert-dismissable alert-danger">
                        <button type="button" class="close" data-dismiss="alert"></button>
                        {{ Session::get('mensaje_error') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    @endif
@stop