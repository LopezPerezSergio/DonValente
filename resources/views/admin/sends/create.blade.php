@extends('adminlte::page')

@section('title', 'Crear Envio')

@section('content_header')
    <h1>CREAR NUEVO ENVIO</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.sends.store', 'autocomplete' => 'off', 'files' => true]) !!}
            
            {!! Form::hidden('user_id', auth()->user()->id) !!}

            <div class="form-group">
                {!! Form::label('status', 'Estatus') !!} {!! Form::label('*', '*', ['style' => 'color:red']) !!}
                {!! Form::select('status', ['1' => 'Pendiente', '2' => 'Depositado', '3' => 'Enviado', '4' => 'Entregado'], null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('paqueteria', 'Paqueteria') !!}
                {!! Form::select('paqueteria', ['0' => 'PENDIENTE',
                                                '1' => 'AUTOBUSES ESTRELLA BLANCA',
                                                '2' => 'DHL', 
                                                '3' => 'ESTAFETA', 
                                                '4' => 'FEDEX',
                                                '5' => 'ARAGAL'], null, ['class' => 'form-control']) !!}

                @error('paqueteria')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('guia', 'Guia de rastreo') !!}
                {!! Form::text('guia', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la paqueteria']) !!}
                @error('paqueteria')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('customer_id', 'Cliente') !!} {!! Form::label('*', '*', ['style' => 'color:red']) !!}
                {!! Form::select('customer_id', $customers, null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                <a class="btn btn-danger" href="{{ route('admin.sends.index') }}" style="width: 100px">Cancelar</a>
                {{--<a class="btn btn-primary" href="{{ route('admin.sends.index') }}" style="width: 100px">Agregar</a>--}}
                {!! Form::submit('Registrar', ['class' => 'btn btn-primary','style' => 'width: 100px']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop