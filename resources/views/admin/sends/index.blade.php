@extends('adminlte::page')

@section('title', 'Envios')

@section('content_header')
    <h1>ENVÍOS REGISTRADOS</h1>
@stop

@section('content')
    @livewire('admin.sends-index')
@stop




