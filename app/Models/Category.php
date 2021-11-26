<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','status'];
    
    public function getRouteKeyName()
    {
        return 'slug';
    }

    //Relacion uno a muchos
    public function products(){
        return $this->hasMany(Product::class);
    }
}
