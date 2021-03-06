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
            <table class="table table-striped">
                <thead>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th colspan="2">Opciones</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td width="10px">
                                <a class="btn btn-info btn-sm" href="{{ route('admin.users.show',$user) }}"><i class="fas fa-eye"></i></a>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
            <div class="card-footer">
                {{$users->links()}}
            </div>
        </div>
    </div>
</div>
