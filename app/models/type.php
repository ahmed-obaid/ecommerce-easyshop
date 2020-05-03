<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\models\product;
use App\models\category;
class type extends Model
{
    protected $fillable=[
        'name'
    ];

     public function products(){
        return $this->hasmany(product::class,'type_id');
    }

    public function categories (){
        return $this->belongstomany(category::class,'cat_type');
    }
}
