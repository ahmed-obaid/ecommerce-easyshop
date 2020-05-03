<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\models\product;
use App\models\type;
class category extends Model
{
    protected $fillable=[
        'name'
    ];

    public function products(){
        return $this->hasmany(product::class,'cat_id');
    }
    public function types(){
        return $this->belongstomany(type::class,'cat_type');
    }
}
