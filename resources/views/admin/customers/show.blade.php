@extends('adminlte::page')

@section('title', 'Cliente')

@section('content_header')
    
@stop

@section('content')        
    
    <div class="card text-center">
        <div class="card-header">
            @if (session('info'))
            <div class="alert alert-success" role="alert">
                <strong>{{ session('info') }}</strong>
            </div>
        @endif  
        </div>
        
        <div class="card-body">
            <h5 class="card-title">{{ $customer->name }}</h5>
            <p class="card-text">Se ha guardado la informacion del cliente que podras usar posteriormente.</p>
            <a href="{{ route('admin.customers.index') }}" class="btn btn-primary">Aceptar</a>
        </div>
        <div class="card-footer text-muted">
             Guardado: {{ $customer->created_at }}
        </div>
    </div>
@stop


