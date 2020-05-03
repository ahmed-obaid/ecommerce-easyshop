 

{{csrf_field()}}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">product Name</label>
                          <input value='{{isset($row)?$row->name:""}}'  name='name' type="text" class="form-control">
                          @if($errors)
                            @foreach($errors as $error)
                                {{$error->name }}      

                            @endforeach
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class='row'>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">desc</label>
                          <input value='{{isset($row)?$row->desc:""}}' name='desc' type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class='row'>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">price</label>
                          <input value='{{isset($row)?$row->price:""}} '  name='price' type="text" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class='row'>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">status </label>
                          <select name='status'class="form-control" >
                            <option value='sold'{{isset($row)&& $row->group=="sold" ?'selected':''}} >sold</option>
                            <option value='not sold'{{isset($row)&& $row->group=="not sold" ?'selected':''}}>not sold</option>
                            
                          </select>
                          
                        </div>
                      </div>
                    </div>
                    <div class='row'>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating"> category</label>
                          <select name='cat_id'class="form-control" >
                          @foreach($categories as $category)

                           <option value='{{$category->id}}'{{isset($row)&& $row->cat_id== $category->id ?'selected':''}}>{{$category->name}} </option>

                          @endforeach
                           
                          </select>     
                          
                        </div>
                      </div>
                    </div>
                    <div class='row'>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating"> type</label>
                          <select name='type_id'class="form-control" >
                          @foreach($types as $type)

                           <option value='{{$type->id}}'{{isset($row)&& $row->cat_id== $type->id ?'selected':''}}>{{$type->name}} </option>

                          @endforeach
                           
                          </select>     
                          
                        </div>
                      </div>
                    </div>
                    <div class='row'>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating"> size</label>
                          <select name='size'class="form-control" >
                              <option value='S'{{isset($row)&& $row->size=="S" ?'selected':''}}>S</option>
                              <option value='M'{{isset($row)&& $row->size=="M" ?'selected':''}}>M</option>
                              <option value='L'{{isset($row)&& $row->size=="L" ?'selected':''}} >L</option>
                              <option value='XL'{{isset($row)&& $row->size=="XL" ?'selected':''}}>XL</option>                            
                          </select>     
                          
                        </div>
                      </div>
                    </div>

                    <div class='row'>
                      <div class="col-md-5">
                        <div class=" ">
                          <label  >image</label>
                          <input value='{{isset($row)?$row->image:""}}'  name='image' type="file"/>
                        </div>
                      </div>
                    </div>








 