<div>
    <div class="card text-center">
        <div class="card-header">
            <img src="{{ $user->profile_photo_url }}" alt="" class="rounded mx-auto d-block">
        </div>

        <div class="card-body">
            
            <h3>
                Nombre: 
                <small class="text-muted">{{ $user->name }}</small>
            </h3>

            <br><hr><br>

            <h3>
                Correo: 
                <small class="text-muted">{{ $user->email }}</small>
            </h3>
        </div>

        <div class="card-footer">
            <h4>
                Creado: 
                <small class="text-muted">{{ $user->created_at }}</small>
            </h4>
        </div>
    </div>
    <a class="btn btn-info float-right" href="{{ route('admin.users.index') }}" style="width: 150px">Volver</a>
</div>
