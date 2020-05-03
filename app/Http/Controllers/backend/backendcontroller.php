<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Requests\backend\users\store;
use App\Http\Controllers\Controller;
 use App\models\category;
 use App\models\type;

class backendcontroller extends Controller
{
    protected $model;
  protected $request;

  public function  __construct($model,$request){
      
        $this->model=$model;
        $this->request=$request;
  }

  public function index(){

    $rows=$this->model;
    $request=$this->request;
    $routename=$this->getClassNameFrommodel();
    $pagetitle= $routename.' controller';
    $pagedesc= ' here you can control/'.$routename;
    $rows=$rows->paginate(2);
    
    return view('backend.'.$routename.'.index',compact(

        'rows',
        'routename',
        'pagetitle',
        'pagedesc'
    ));

  }

  public function create(){

   $routename=$this->getClassNameFrommodel();
   $pagetitle=$this->modelname().' create';    
    $foldername=$routename;
    $categories=category::all();
    $types=type::all();
   

   return view('backend.'.$routename.'.create',compact(

    'routename',
    'pagetitle',
    'foldername',
    'categories',
    'types'
   ));
  }

  public function destroy($id){

    $routename=$this->getClassNameFrommodel();
    $row=$this->model;
    $row= $row->findorfail($id);
    $row= $row->delete();
    
 
    return  redirect()->route($routename.'.index');
 
    
   }

   public function edit($id){

   
   
    $routename=$this->getClassNameFrommodel();
    $pagetitle=$this->modelname().' create';  
     $foldername=$routename;
     $row=$this->model->findorfail($id);
     $categories=category::all();
     $types=type::all();
    
    
 
    return view('backend.'.$routename.'.edit',compact(
        'row',
     'routename',
     'pagetitle',
     'foldername',
     'categories',
     'types'
    ));
   }
 



  protected function modelname(){

    return  class_basename($this->model);
  
  }
   protected function pluralmodelname(){
  
    return str_plural($this->modelname()  );
  
  }
  
  
    protected function getClassNameFrommodel(){
  
      return  strtolower($this->pluralmodelname());
    }

}
