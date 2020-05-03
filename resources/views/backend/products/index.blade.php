@extends('backend.layout.app')

@section('title')
products

@endsection


@section('content')

@component('backend.layout.nav')
@slot('nav_title')   
  products
 @endslot
@endcomponent



@component('backend.layout.shared.table',['pagetitle'=>$pagetitle ,'pagedesc'=>$pagedesc])
@slot('addbutton')   
 <div class="col-md-4 text-right">
    <a href="{{route($routename.'.create')}}" class="btn btn-white btn-round ">add product</a>

 </div>
 @endslot


@slot('table')

 <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th> id  </th>
                        <th>name  </th>
                        <th>description </th>
                        <th> cat_id </th>
                        <th> type_id</th>                                                                                  
                        <th> status </th>
                        <th> size </th>                                          
                        <th class='text-right'>controller </th>                                               
                      </thead>
                      <tbody>
        @foreach($rows as $row)
                            <tr>
                              <td>{{$row->id}}</td>
                              <td>{{$row->name}}</td>
                              <td>{{$row->desc}}</td>
                              <td>{{$row->cat_id}}</td>
                              <td>{{$row->type_id}}</td>
                              <td>{{$row->status}}</td>
                              <td>{{$row->size}}</td>
                              <td> </td>
                              <td class="td-actions text-right">
                                  @include('backend.layout.shared.buttons.edit')  
                                  @include('backend.layout.shared.buttons.delete')  
                              </td>                                                                       
                            </tr>
        @endforeach
                         </tbody>
                    </table>                                      
  @endslot
 
  @endcomponent
  {!!$rows->links()!!}
 
@endsection