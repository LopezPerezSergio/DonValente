@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
<a class="btn btn-success float-right" href="{{ route('admin.categories.create') }}" style="width: 150px; margin: 0 1em">Agregar Categoría</a>
<a target='_Blank' class="btn btn-danger float-right" href="{{ route('admin.pdf.categories') }}" style="width: 50px;">PDF</a>
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
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.categories.edit',$category) }}"><i class="fas fa-edit"></i></a>
                            </td>
                            <td width="10px">
                                <form action="#" method="POST">
                                    @csrf
                                    
                                    <button type="submit" class="btn @if ($category->status === '1') btn-success @else btn-warning @endif  btn-sm">@if ($category->status === '1') <i class="fas fa-play"></i> @else <i class="fas fa-pause"></i> @endif</button>                                    
                                </form>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.categories.destroy',$category) }}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

