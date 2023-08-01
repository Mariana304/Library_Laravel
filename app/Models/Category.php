<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

     //relacion mucho a muchos,"una ategoria puede tener muchos libros (belongsToMany)"
     public function books(){
        return $this->belongsToMany('App\Models\Book');
    }
}
