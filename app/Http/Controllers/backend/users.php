<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Requests\backend\users\store;
use Illuminate\Support\Facades\Hash;
use App\models\User;

class users extends backendcontroller
{
    public function __construct(User $model,Request $request){
       
            parent::__construct($model,$request);

    }

    public function store(store $request){
      $requestarray=$request->all();
      $requestarray['password']= Hash::make($requestarray['password']);
      User::create($requestarray);
     
  
      return redirect()->route('users.index');
 

    }

    public function update(store $request,$id){
        $requestarray=$request->all();

        $requestarray=[
            'name' =>$request->name,
            'email'=>$request->email
          ];
          if($request->has('password')&& $request->get('password')!='')
          {
            $requestarray=$requestarray +['password'=>Hash::make($request->password)];
    
          }

       
       $row= $this->model->findorfail($id)->update( $requestarray);

         
     
       
    
        return redirect()->route('users.index');
   
  
      }

}
