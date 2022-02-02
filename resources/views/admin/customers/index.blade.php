@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <a class="btn btn-success float-right" href="{{ route('admin.customers.create') }}" style="width: 150px; margin: 0 1em">Agregar Cliente</a>
    <a target='_Blank' class="btn btn-danger float-right" href="{{ route('admin.pdf.customers') }}" style="width: 50px;">PDF</a>
    <h1>CLIENTES REGISTRADOS</h1>
@stop

@section('content')
    @livewire('admin.customers-index')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop