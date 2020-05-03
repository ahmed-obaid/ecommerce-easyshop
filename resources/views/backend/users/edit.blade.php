@extends('backend.layout.app')
@php 
     $pagetitle='edit user';
      $d='here you can edit user'
 @endphp

 @section('title')
         {{$pagetitle}}
 @endsection

 @section('content')

 @component('backend.layout.nav' )

  @slot('nav_title')
   
  {{$pagetitle}}
  @endslot


@endcomponent

@component('backend.layout.shared.edit',['pagetitle'=>$pagetitle,'pagedesc'=>''] )

@slot('slot')
 <div class="card-body">
                       <form action='{{route($routename.".update",["id"=>$row->id])}}' method='post'>
                        {{method_field('put')}}
                        
                         @include('backend.'.$foldername.'.forme')
                                  
                    
                            <button type="submit" class="btn btn-primary pull-right">update user</button>
                           <div class="clearfix"></div>
                      </form>
                    </div>
   
@endslot

 
@endcomponent
 


 @endsection

