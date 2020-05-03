<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\models\category;
use App\models\type;
class product extends Model
{
    protected $fillable=[
        'name','status','cat_id','type_id','desc','price','size','image'
    ];

    public function category(){
        return $this->belongsto(category::class,'cat_id');
    }

    public function type(){
        return $this->belongsto(type::class,'type_id');
    }
}
