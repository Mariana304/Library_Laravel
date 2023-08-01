<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [];


    

       //relacion uno a muchos

       public function author(){
        return $this->belongsTo('App\Models\Author');
    }


    //relacion mucho a muchos

    public function categories(){
        return $this->belongsToMany('App\Models\Category');
    }
}
