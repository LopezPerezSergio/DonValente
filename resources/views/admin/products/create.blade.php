@extends('adminlte::page')

@section('title', 'Crear Producto')

@section('content_header')
    <h1>AGREGAR NUEVO PRODUCTO</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.products.store','autocomplete' => 'off','files' => true]) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!} {!! Form::label('*', '*',['style' => 'color:red']) !!}
                    {!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Ingrese el nombre del producto']) !!}
                    
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('category_id', 'Categoría') !!} {!! Form::label('*', '*',['style' => 'color:red']) !!}
                    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('description', 'Descripción') !!} {!! Form::label('*', '*',['style' => 'color:red']) !!}
                    {!! Form::textarea('description', null, ['class' => 'form-control','placeholder' => 'Ingrese una descripcion del producto']) !!}
                    
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('lote', 'Cantidad') !!} {!! Form::label('*', '*',['style' => 'color:red']) !!}
                    {!! Form::number('lote', null, ['class' => 'form-control','placeholder' => 'Ingrese la cantidad del producto en inventario']) !!}

                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('amount', 'Precio') !!} {!! Form::label('*', '*',['style' => 'color:red']) !!}
                    {!! Form::text('amount', null, ['class' => 'form-control','placeholder' => 'Ingrese el precio del producto']) !!}
                    
                    @error('amount')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="form-group"> 
                            {!! Form::label('file', 'Imagen del producto') !!} {!! Form::label('*', '*',['style' => 'color:red']) !!}
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
                            <img id="picture" src="https://www.celtiberian.es/wp-content/uploads/2019/01/cloud-computing-upload-transparent.png" alt="...">
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
                    <a class="btn btn-danger" href="{{ route('admin.products.index') }}" style="width: 100px">Cancelar</a>
                    {!! Form::submit('Agregar', ['class' => 'btn btn-primary','style' => 'width: 100px']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>

@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
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