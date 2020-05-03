 

{{csrf_field()}}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">category Name</label>
                          <input value='{{isset($row)?$row->name:""}}'  name='name' type="text" class="form-control">
                          @if($errors)
                            @foreach($errors as $error)
                                {{$error->name }}      

                            @endforeach
                          @endif
                        </div>
                      </div>
                    </div>

                    

 