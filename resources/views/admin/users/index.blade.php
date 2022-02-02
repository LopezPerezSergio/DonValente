@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
<a target='_Blank' class="btn btn-danger float-right" href="{{ route('admin.pdf.users') }}" style="width: 50px;">PDF</a>

    <h1>USUARIOS REGISTRADOS</h1>
@stop

@section('content')
    @livewire('admin.users-index')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop