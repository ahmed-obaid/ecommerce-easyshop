<form action='{{route($routename.".destroy",["id"=>$row->id])}}'method='post' >
      {{csrf_field()}}
    {{method_field('delete')}}

    <button  type='submit' rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove">
    <i class="material-icons">close</i>
    </button>
                                
 </form>