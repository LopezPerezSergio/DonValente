<div>
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif 

    <div class="card" style="background-color: rgb(241, 241, 241)">
        <div class="card-header">
            <strong>Busqueda:</strong>
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre del cliente">    
        </div>
        
        <div class="card-body">
            <table class="table table-responsive table-striped">
                <thead>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th colspan="3">Opciones</th>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->addres }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.customers.edit',$customer) }}"><img src="{{ Storage::url('image/edit.png') }}"  alt=""></a>
                            </td>
                            <td width="10px">
                                @if ( $customer->status === '1')
                                    <a class="btn btn-success btn-sm" href="#"><img src="{{ Storage::url('image/active.png') }}"  alt=""></a>
                                @else
                                    <a class="btn btn-warning btn-sm" href="#"><img src="{{ Storage::url('image/desactive.png') }}"  alt=""></a>
                                @endif
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.customers.destroy',$customer) }}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm"><img src="{{ Storage::url('image/delete.png') }}"  alt=""></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
            <div class="card-footer">
                {{$customers->links()}}
            </div>
        </div>
    </div>
</div>
