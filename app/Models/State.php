<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    //Relacion uno a muchos
    public function sends(){
        return $this->hasMany(Send::class);
    }
}
