<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";
    
    public $search;
    
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $products = Product::where('name','LIKE','%'.$this->search.'%')
                            ->paginate(9);
        return view('livewire.admin.products-index',compact('products'));
    }
}
