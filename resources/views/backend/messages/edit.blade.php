@extends('backend.layout.app')
@php 
     $pagetitle='message';
      $d='here you can show message'
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
          
           
             @include('backend.'.$foldername.'.forme')
                                                                               
            
       </div>
   
@endslot

 
@endcomponent
 


 @endsection

