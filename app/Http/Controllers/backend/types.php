<?php

namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use App\Http\Requests\backend\types\store;
use App\models\type;


class types extends backendcontroller
{
    public function __construct(type $model,Request $request){

        parent::__construct($model,$request);

    }

    public function store(store $request){
        $requestarray=$request->all();
         
        type::create($requestarray);
       
    
        return redirect()->route('types.index');
   
  
      }


      public function update(store $request,$id){
        
        
        type::findorfail($id)->update($request->all());
       
    
        return redirect()->route('types.index');
   
  
      }

}
