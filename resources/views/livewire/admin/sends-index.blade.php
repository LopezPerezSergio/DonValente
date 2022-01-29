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
                                <div class="card-header " style="height: 5rem; ">
                                    <b>Estatus:</b>
                                    <div class="progress rounded-pill">
                                        <div class="@if ($send->status === '1') progress-bar bg-danger @endif
                                                    @if ($send->status === '2') progress-bar bg-warning @endif
                                                    @if ($send->status === '3') progress-bar bg-info @endif
                                                    @if ($send->status === '4') progress-bar bg-success @endif" role="progressbar" style="   @if ($send->status === '1') width: 25% @endif
                                                                                                                                                                                        @if ($send->status === '2') width: 50% @endif
                                                                                                                                                                                        @if ($send->status === '3') width: 75% @endif
                                                                                                                                                                                        @if ($send->status === '4') width: 100% @endif" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div>

                                {{-- Cuerpo de carta --}}
                                <div class="card-body">
                                    <div class="mb-4" style="height: 17rem;">
                                        <p class="card-text">
                                            <b>Atendio: </b>{{ $send->user->name }}
                                        </p>
                                        <p>
                                            <b>Fecha de atencion:</b>{{ $send->created_at }}
                                        </p>
                                        <hr>
                                        <p>
                                            <b>Paqueteria:</b>
                                            @if ($send->paqueteria === '0') PENDIENTE POR ASIGNAR @endif
                                            @if ($send->paqueteria === '1') AUTOBUSES ESTRELLA BLANCA @endif
                                            @if ($send->paqueteria === '2') DHL @endif
                                            @if ($send->paqueteria === '3') ESTAFETA @endif
                                            @if ($send->paqueteria === '4') FEDEX @endif
                                            @if ($send->paqueteria === '5') ARAGAL @endif
                                        </p>
                                        <p>
                                            <b>Guia del Envio:</b> {{ $send->guia }}
                                        </p>
                                        <hr>
                                        <p>
                                            <b>Cliente:</b> {{ $send->customer->name }}
                                        </p>
                                        <p>
                                            <b>Direccion:</b> {{ $send->customer->addres }}
                                        </p>
                                    </div>

                                </div>
                                {{-- Pie de carta --}}
                                <div class="card-footer">

                                    <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('admin.sends.edit', $send) }}"><i
                                                class="fas fa-edit"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="card-footer">
                {{ $sends->links() }}
            </div>
        @else
            <div class="card-body d-flex flex-row-reverse bd-highlight">
                <strong>NO SE ENCONTRO NINGUN REGISTRO ...</strong>
            </div>
        @endif


    </div>
</div>
