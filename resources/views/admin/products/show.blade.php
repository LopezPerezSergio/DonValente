@extends('adminlte::page')

@section('title', 'Producto')

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
            {{-- <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">Se ha guardado una categoría que podras usar posteriormente para ordenar tus productos.</p>
            <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Aceptar</a>
             --}}
            <div class="card mb-3">
                <img src="@if ($product->image) {{ Storage::url($product->image->url) }}  @else https://cdn.pixabay.com/photo/2017/01/20/19/06/box-1995679_960_720.jpg @endif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">Categoría: {{ $product->category->name }}</p>
                    <p class="card-text">Precio: ${{ $product->amount }}</p>
                    <p class="card-text">Lote: {{ $product->lote }}</p>
                </div>
                <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Aceptar</a>
            </div>
        </div>

        <div class="card-footer text-muted">
             Creado: {{ $product->created_at }}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        img {
            width: 300px; /* You can set the dimensions to whatever you want */
            height: 300px;
            object-fit: cover;
        }
    </style>
@stop

