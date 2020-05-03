<?php

namespace App\models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint\timestamps;
class cart extends Model
{
    public $items=[];
    public $totalqty;
    public $totalprice;
    public $time;
    public function __construct($cart=null){

     if($cart)
        {
         $this->items=$cart->items;
         $this->totalqty=$cart->totalqty;
         $this->totalprice=$cart->totalprice;
        // $this->time=now();

        }else{

            $this->items=[];
            $this->totalqty=0;
            $this->totalprice=0;
          //  $this->time=now();

        }
    }


    public function addornot($product){
        $item=[
            'id'=>$product->id,
          'title'=>$product->title, 
          'name'=>$product->name,
          'desc'=>$product->desc, 
          'price'=>$product->price,
          'qty'=>0,
          'image'=>$product->image,
          'date'=>now(),
      ];
      if(!array_key_exists($product->id , $this->items)){
          $this->items[$product->id]=$item;
          $this->totalqty +=1;
          $this->totalprice +=$product->price;  
          $this->items[$product->id]['qty'] += 1;

      }else{
          if(request()->route('subtract')!==null)
          {
              if($this->items[$product->id]['qty'] != 0)
              {
            $this->totalqty -=1;
            $this->totalprice -= $product->price; 
            $this->items[$product->id]['qty'] -= 1;
             }
          }else{
            $this->totalqty +=1;
            $this->totalprice += $product->price; 
            $this->items[$product->id]['qty'] += 1;
          }
          
      }
       

    }

   
}
