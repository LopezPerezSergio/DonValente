<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','addres','email','phone'];
    
    public function getRouteKeyName()
    {
        return 'slug';
    }

    //Relacion uno a muchos
    public function sends(){
        return $this->hasMany(Send::class);
    }
}
