@extends('adminlte::page')

@section('title', 'Crear Envio')

@section('content_header')
    <h1>CREAR NUEVO ENVIO</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.sends.index','autocomplete' => 'off','files' => true]) !!}
        <div class="form-group">
            {!! Form::label('status', 'Estatus') !!} 
            {!! Form::select('status', ['1' => 'Pendiente','2' => 'Enviado'], null, ['class' => 'form-control']) !!}
        </div>   

            <div class="form-group">
                {!! Form::label('paqueteria', 'Paqueteria') !!} 
                {!! Form::text('Paqueteria',null,['class' => 'form-control','placeholder' => 'Ingrese el nombre de la paqueteria']) !!}

            </div>

            <div class="form-group">
                {!! Form::label('guia', 'Guia de rastreo') !!} 
                {!! Form::text('guia',null,['class' => 'form-control','placeholder' => 'Ingrese el nombre de la paqueteria']) !!}
                
            </div>


            <div class="form-group">
                {!! Form::label('customer_id', 'Cliente') !!} 
                {!! Form::select('customer_id', $customers, null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                <a class="btn btn-danger" href="{{ route('admin.sends.index') }}" style="width: 100px">Cancelar</a>
                <a class="btn btn-primary" href="{{ route('admin.sends.index') }}" style="width: 100px">Agregar</a>

            </div>

        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    
@stop

@section('js')
    
@stop