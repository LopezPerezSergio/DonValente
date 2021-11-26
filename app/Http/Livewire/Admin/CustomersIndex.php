<?php

namespace App\Http\Livewire\Admin;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class CustomersIndex extends Component
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
        $customers = Customer::where('name','LIKE','%'.$this->search.'%')
                           ->paginate(9);
        return view('livewire.admin.customers-index',compact('customers'));
    }
}
