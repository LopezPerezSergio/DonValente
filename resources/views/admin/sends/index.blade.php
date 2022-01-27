@extends('adminlte::page')

@section('title', 'Envios')

@section('content_header')
    <h1>ENVIOS REGISTRADOS</h1>
@stop

@section('content')            
    @livewire('admin.sends-index')
@stop

@section('css')
    
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop