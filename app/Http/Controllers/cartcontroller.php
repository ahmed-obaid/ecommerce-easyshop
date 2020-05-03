<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\product;
use App\models\cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;

class cartcontroller extends Controller
{
    public function addtocart(product $product){

        
       if(session()->has('cart'))
       {
        $cart= new cart(session()->get('cart'));

       }else{
        $cart= new cart();

       }
       
       $cart->addornot($product);
        
       session()->put('cart',$cart);
       
       return back();
    }


    public function showcart(){

      
        if(session()->has('cart'))
        {
         $cart= new cart(session()->get('cart'));
 
        }else{
         $cart=null;
 
        }
     
       // session()->put('cart',$cart);     
        return view('frontend.cart.showcart',compact('cart'));
     }

     public function subtract(product $product){
 
       if(session()->has('cart'))
       {
        $cart= new cart(session()->get('cart'));

       }else{
        $cart= new cart();

       }
       
       $cart->addornot($product);
        
       session()->put('cart',$cart);
       
       return back();
    }

    public function checkout($amount){
 
    
      return view('frontend.cart.checkout',compact('amount'));
   }

   public function charge(request $request){
        // dd($request->stripeToken);

        $charge= stripe::charges()->create([
         'currency'=>'USD',
         'source'=>$request->stripeToken,          
         'amount'=>$request->totalprice,
         'description'=>'test from laravel new app',
     ]);
     
     $chargeid=$charge['id'];

     if($chargeid){
         
        auth()->user()->orders()->create([
            'order'=>serialize(session()->get('cart'))
        ]);
    
         session()->forget('cart');
        
         return redirect()->route('home')->with('success','payment was done');
         

     }else{
         return redirect()->back();
     }
       
   }


}
