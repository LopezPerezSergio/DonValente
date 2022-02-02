@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <a class="btn btn-success float-right" href="{{ route('admin.products.create') }}" style="width: 150px">Agregar Producto</a>
    <a target='_Blank' class="btn btn-danger float-right" href="{{ route('admin.pdf.products') }}" style="width: 50px; margin: 0 1em">PDF</a>
    <h1>PRODUCTOS REGISTRADOS</h1>
@stop

@section('content')            
    @livewire('admin.products-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        

        .image-wrapper{
            padding-bottom: 60%;
        }

        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 40%;
        }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop