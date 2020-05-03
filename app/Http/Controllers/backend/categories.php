<?php

namespace App\Http\Controllers\backend;
use App\Http\Requests\backend\categories\store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\category;
class categories extends backendcontroller
{
    public function __construct(category $model,Request $request){

        parent::__construct($model,$request);

    }

    public function store(store $request){
        $requestarray=$request->all();
         
        category::create($requestarray);
       
    
        return redirect()->route('categories.index');
   
  
      }


      public function update(store $request,$id){
        
        
        category::findorfail($id)->update($request->all());
       
    
        return redirect()->route('categories.index');
   
  
      }



  
}
