@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>USUARIOS REGISTRADOS</h1>
@stop

@section('content')
    @livewire('admin.users-index')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop