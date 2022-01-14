@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>DASHBOARD</h1>
@stop

@section('content')

    @livewire('admin.index')

@stop

@section('css')
<style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
@stop

@section('js')
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script> console.log('Hi!'); </script>
@stop
