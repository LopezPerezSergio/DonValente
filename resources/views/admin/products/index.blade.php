@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <a class="btn btn-success float-right" href="{{ route('admin.products.create') }}">Agregar Producto</a>
    <h1>PRODUCTOS REGISTRADOS</h1>
@stop

@section('content')            
    @livewire('admin.products-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        img {
            width: 200px; /* You can set the dimensions to whatever you want */
            height: 300px;
            object-fit: cover;
        }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop