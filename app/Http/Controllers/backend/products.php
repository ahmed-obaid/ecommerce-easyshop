<?php

namespace App\Http\Controllers\backend;
use App\Http\Requests\backend\products\store;
use Illuminate\Http\Request;
 use App\models\product;

class products extends backendcontroller
{
    public function __construct(product $model,Request $request){
       
        parent::__construct($model,$request);

}

public function store(store $request){
  
  $file=$request->file('image');
  $filename=time().str_random(10).'.'.$file->getclientoriginalextension();
  $file->move(public_path('uploads'),$filename);
  $requestarray=['image'=>$filename]+$request->all();
  
  product::create($requestarray);
 

  return redirect()->route('products.index');


}

public function update(\App\Http\Requests\backend\products\update $request,$id){
    
    $row=product::findorfail($id); 
    $requestarray=$request->all() ; 
    if($request->hasfile('image'))
    {
      $file=$request->file('image');
      $filename=time().str_random('10').'.'.$file->getclientoriginalextension();
      $file->move(public_path('uploads'),$filename);
      $requestarray=['image'=>$filename]+$request->all() ;
    }else{
       
      $requestarray=['image'=>$row->image];
    }
 
    $row->update($requestarray);
    return redirect()->route('products.index');


  }
}
