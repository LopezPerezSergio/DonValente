@extends('adminlte::page')

@section('title', 'Agregar Cliente')

@section('content_header')
    <h1>AGREGAR NUEVO CLIENTE</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.customers.store','autocomplete' => 'off']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!} {!! Form::label('*', '*',['style' => 'color:red']) !!} 
                    {!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Nombre completo']) !!}
                    
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('addres', 'Dirección') !!} {!! Form::label('*', '*',['style' => 'color:red']) !!} 
                    {!! Form::text('addres',null,['class' => 'form-control','placeholder' => 'Calle # - Colonia - Municipio - CP ']) !!}
                    
                    @error('addres')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Correo') !!}
                    {!! Form::email('email', null, ['class' => 'form-control','placeholder' => 'Ingrese el correo electronico']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('phone', 'Teléfono') !!} {!! Form::label('*', '*',['style' => 'color:red']) !!} 
                    {!! Form::text('phone', null, ['class' => 'form-control','placeholder' => 'Ingrese el telefono']) !!}
                    
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug',null,['class' => 'form-control','placeholder' => 'Ingrese el slug del cliente','readonly']) !!}
                    
                    @error('slug')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <a class="btn btn-danger" href="{{ route('admin.customers.index') }}" style="width: 100px">Cancelar</a>
                    {!! Form::submit('Agregar', ['class' => 'btn btn-primary','style' => 'width: 100px']) !!}
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
    </script>
@stop