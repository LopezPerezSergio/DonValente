<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Send extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    //Relacion muchos a muchos
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    
    /* public function satate(){
        return $this->belongsTo(State::class);
    } */
}
