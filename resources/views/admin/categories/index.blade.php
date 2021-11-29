@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
<a class="btn btn-success float-right" href="{{ route('admin.categories.create') }}" style="width: 150px">Agregar Categoría</a>
<h1>CATEGORIAS REGISTRADOS</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif 

    <div class="card" style="background-color: rgb(241, 241, 241)">

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th>#</th>
                    <th>Nombre</th>
                    <th colspan="3">Opciones</th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.categories.edit',$category) }}"><img src="{{ Storage::url('image/edit.png') }}"  alt=""></a>
                            </td>
                            <td width="10px">
                                <form action="#" method="POST">
                                    @csrf
                                    
                                    <button type="submit" class="btn @if ($category->status === '1') btn-success @else btn-warning @endif  btn-sm">@if ($category->status === '1') <img src="{{ Storage::url('image/active.png') }}"  alt=""> @else <img src="{{ Storage::url('image/desactive.png') }}"  alt=""> @endif</button>                                    
                                </form>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.categories.destroy',$category) }}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm"><img src="{{ Storage::url('image/delete.png') }}"  alt="..."></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

