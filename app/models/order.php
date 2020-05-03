<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\models\User;
class order extends Model
{
    protected $fillable=[
        'user_id','order'
    ];

    public function user(){
        return $this->belongsto(User::class);
    }
}
