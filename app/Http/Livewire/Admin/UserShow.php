<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class UserShow extends Component
{
    public $user;
    
    public function render()
    {
        return view('livewire.admin.user-show');
    }
}
