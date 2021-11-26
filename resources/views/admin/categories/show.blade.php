@extends('adminlte::page')

@section('title', 'Categoría')

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
            <h5 class="card-title">{{ $category->name }}</h5>
            <p class="card-text">Se ha guardado una categoría que podras usar posteriormente para ordenar tus productos.</p>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">Aceptar</a>
        </div>
        <div class="card-footer text-muted">
             Creado: {{ $category->created_at }}
        </div>
    </div>
@stop


