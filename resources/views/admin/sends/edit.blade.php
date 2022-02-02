@extends('adminlte::page')

@section('title', 'Editar Envio')

@section('content_header')
    <h1>EDITAR ENVIO</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($send, ['route' => ['admin.sends.update', $send], 'autocomplete' => 'off', 'files' => true, 'method' => 'put']) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}

            <div class="form-group">
                {!! Form::label('customer_id', 'Cliente') !!} {!! Form::label('*', '*', ['style' => 'color:red']) !!}
                {!! Form::select('customer_id', $customers, null, ['class' => 'form-control', 'disabled']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('status', 'Estatus') !!} {!! Form::label('*', '*', ['style' => 'color:red']) !!}
                {!! Form::select('status', ['1' => 'Pendiente', '2' => 'Depositado', '3' => 'Enviado', '4' => 'Entregado'], null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('paqueteria', 'Paqueteria') !!} {!! Form::label('*', '*', ['style' => 'color:red']) !!}
                {!! Form::select('paqueteria', ['1' => 'AUTOBUSES ESTRELLA BLANCA', '2' => 'DHL', '3' => 'ESTAFETA', '4' => 'FEDEX', '5' => 'ARAGAL'], null, ['class' => 'form-control']) !!}

                @error('paqueteria')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('guia', 'Guia de rastreo') !!} {!! Form::label('*', '*', ['style' => 'color:red']) !!}
                {!! Form::text('guia', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la paqueteria']) !!}
                @error('guia')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <a class="btn btn-danger" href="{{ route('admin.sends.index') }}" style="width: 100px">Cancelar</a>
                {{-- <a class="btn btn-primary" href="{{ route('admin.sends.index') }}" style="width: 100px">Agregar</a> --}}
                {!! Form::submit('Actualizar', ['class' => 'btn btn-primary', 'style' => 'width: 100px']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
    
@stop
