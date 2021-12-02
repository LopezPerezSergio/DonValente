@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')
    <h1>USUARIO</h1>
@stop

@section('content')
    @livewire('admin.user-show',['user' => $user])
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop