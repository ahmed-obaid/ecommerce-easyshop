@extends('backend.layout.app')
 

  

 @section('content')

 @component('backend.layout.nav' )

     @slot('nav_title')
   
         {{$pagetitle}}
     @endslot


 @endcomponent
 @component('backend.layout.shared.edit',['pagetitle'=>$pagetitle,'pagedesc'=>''] )



 @slot('slot')
 <div class="card-body">
    <form action='{{route($routename.".store")}}' method='post'>
             
        @include('backend.'.$foldername.'.forme')
                                  
                    
       <button type="submit" class="btn btn-primary pull-right">add user</button>
      <div class="clearfix"></div>
   </form>
 </div>
   
@endslot


 @endcomponent
 @endsection