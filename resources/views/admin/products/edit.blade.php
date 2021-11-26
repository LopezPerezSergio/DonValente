@extends('adminlte::page')

@section('title', 'Editar Producto')

@section('content_header')
    <h1>EDITAR CATEGORIA</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">
        {!! Form::model($product,['route' => ['admin.products.update',$product],'autocomplete' => 'off','files' => true,'method' => 'put']) !!}
            
        <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Ingrese el nombre del producto']) !!}
                
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Categoría') !!}
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Descripción') !!}
                {!! Form::textarea('description', null, ['class' => 'form-control','placeholder' => 'Ingrese una descripcion del producto']) !!}
                
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('lote', 'Cantidad') !!}
                {!! Form::number('lote', null, ['class' => 'form-control','placeholder' => 'Ingrese la cantidad del producto en inventario']) !!}

                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('amount', 'Precio') !!}
                {!! Form::text('amount', null, ['class' => 'form-control','placeholder' => 'Ingrese el precio del producto']) !!}
                
                @error('amount')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="row mb-3">
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('file', 'Imagen del producto') !!}
                        {!! Form::file('file', ['class' => 'form-control-file','accept' => 'image/*']) !!}
                    </div>
                    @error('file')
                        <br>
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <p>
                        <h4>Nota:</h4>
                        Recuerde que la imagen ayudara a identificar de mejor forma los productos.
                    </p>
                </div>

                <div class="col">
                    <div class="image-wrapper">
                        <img id="picture" src="@if ($product->image) {{ Storage::url($product->image->url) }}  @else https://cdn.pixabay.com/photo/2017/01/20/19/06/box-1995679_960_720.jpg @endif" alt="">
                    </div>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug',null,['class' => 'form-control','placeholder' => 'Ingrese el slug del cliente','readonly']) !!}
                
                @error('slug')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <a class="btn btn-danger" href="{{ route('admin.products.index') }}">Cancelar</a>
                {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}">  </script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

        document.getElementById("file").addEventListener('change',cambiarImagen);
        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src',event.target.result);
            };

            reader.readAsDataURL(file);
        }
    </script>
@stop
