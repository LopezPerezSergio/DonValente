<?php

namespace App\Http\Livewire\Admin;

use App\Models\Send;
use Livewire\Component;
use Livewire\WithPagination;

class SendsIndex extends Component
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
        $sends = Send::paginate(9);
        return view('livewire.admin.sends-index',compact('sends'));
    }
}
