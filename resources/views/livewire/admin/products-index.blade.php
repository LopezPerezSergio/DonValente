<div>
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif 

    <div class="card" style="background-color: rgb(241, 241, 241)">
        <div class="card-header">
            <strong>Busqueda:</strong>
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de un producto">    
        </div>

        @if ($products->count())
            <div class="card-body">
                <div class="row row-cols-1 row-cols-md-3">
                    @foreach ($products as $product)
                        <div class="col mb-3">
                            {{-- Nueva carta por producto --}}
                            <div class="card h-100">
                                <div class="card-header" style="height: 5rem;">
                                    {{ $product->name }}
                                </div>
                                {{-- Imagen del producto  clases por definir--}}
                                <div class="image-wrapper">
                                    <img class="card-img-top" src="@if ($product->image) {{ Storage::url($product->image->url) }}  @else https://cdn.pixabay.com/photo/2017/01/20/19/06/box-1995679_960_720.jpg @endif" alt="...">    
                                </div>                                
                                {{-- Cuerpo de carta --}}
                                <div class="card-body">
                                    <div class="mb-4" style="height: 7rem;">
                                        <p class="card-text" >{{ $product->description }}</p>
                                    </div>
                                    
                                    <h6 class="card-subtitle mb-3 text-muted">Precio: ${{ $product->amount }}</h6>
                                    <h6 class="card-subtitle mb-1 text-muted">En inventario: {{ $product->lote }}</h6>
                                </div>     
                                {{-- Pie de carta --}}                               
                                <div class="card-footer">
                                    
                                    <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                                        <a class="btn btn-primary btn-sm" href="{{ route('admin.products.edit',$product) }}"><i class="fas fa-edit"></i></a>
                                        
                                        <form action="#" method="POST">
                                            @csrf
                                            
                                            <button type="submit" class="btn @if ($product->status === '1') btn-success @else btn-warning @endif  btn-sm mr-1 ml-1">@if ($product->status === '1') <i class="fas fa-play"></i> @else <i class="fas fa-pause"></i> @endif</button>                                    
                                        </form>
                                        
                                        <form action="{{ route('admin.products.destroy',$product) }}" method="POST">
                                            @csrf
                                            @method('delete')

                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="card-footer">
                {{$products->links()}}
            </div>
        @else
            <div class="card-body d-flex flex-row-reverse bd-highlight">
                <strong>NO SE ENCONTRO NINGUN REGISTRO ...</strong>
            </div>
        @endif

        
    </div>
</div>
