@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <a class="btn btn-success float-right" href="{{ route('admin.customers.create') }}">Agregar Cliente</a>
    <h1>CLIENTES REGISTRADOS</h1>
@stop

@section('content')
    @livewire('admin.customers-index')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop