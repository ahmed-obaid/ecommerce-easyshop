<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use  App\Http\Requests\messages\store;
 use App\models\message;
 use Illuminate\Support\Facades\Mail; 
 use  App\Mail\replycontact;
class messages extends backendcontroller
{
     public function __construct(message $message,request $request){
         parent::__construct($message,$request);
     }


     public function replay(request $request,$id){

        $message=$this->model->findorfail($id);
        $replay=$request->replay; 
        Mail::send(new replycontact($message,$replay));
     
          return redirect()->route('messages.edit',['id'=>$message->id]);
        
    }
}
