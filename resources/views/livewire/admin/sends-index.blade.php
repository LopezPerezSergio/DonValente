<div>
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif 

    <div class="card" style="background-color: rgb(241, 241, 241)">
        

        @if ($sends->count())
            <div class="card-body">
                <div class="row row-cols-1 row-cols-md-3">
                    @foreach ($sends as $send)
                        <div class="col mb-3">
                            {{-- Nueva carta por producto --}}
                            <div class="card h-100">
                                <div class="card-header" style="height: 5rem; ">
                                    Estatus: 
                                    <p style="color: @if ($send->status === '1') red; @else green; @endif">
                                        @if ($send->status === '1') Pendiente @else Enviado @endif
                                    </p> 
                                    
                                </div>

                                {{-- Cuerpo de carta --}}
                                <div class="card-body">
                                    <div class="mb-4" style="height: 12rem;">
                                        <p class="card-text" >
                                            Atendio: {{ $send -> user -> name}}                                            
                                        </p>
                                        <p>
                                            Fecha de atencion: {{ $send -> created_at }}
                                        </p>
                                        <p>
                                            Paqueteria: {{ $send -> paqueteria }}
                                        </p>
                                        <p>
                                            Guia: {{ $send -> guia }}
                                        </p>
                                        <p>
                                            Cliente: {{ $send -> customer -> name}}
                                        </p>
                                    </div>
                                    
                                </div>     
                                {{-- Pie de carta --}}                               
                                <div class="card-footer">
                                    
                                    <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                                        <a class="btn btn-primary btn-sm" href="{{ route('admin.sends.edit',$send) }}"><i class="fas fa-edit"></i></a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="card-footer">
                {{$sends->links()}}
            </div>
        @else
            <div class="card-body d-flex flex-row-reverse bd-highlight">
                <strong>NO SE ENCONTRO NINGUN REGISTRO ...</strong>
            </div>
        @endif

        
    </div>
</div>
