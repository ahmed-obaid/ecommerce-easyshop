<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class orders extends Controller
{
    public function orders(){
        
        $orders=auth()->user()->orders;
      // $time=auth()->user()->orders()->first()->get()->created_at;

    
        $carts=$orders->transform(function($orders,$key){
            return unserialize($orders->order);
        });
        // dd($carts);
        return view('frontend.cart.orders')->with('carts',$carts);
    }
}
