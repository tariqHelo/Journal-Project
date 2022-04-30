

     <div class="card-body">
                  <div class="form-group row" >
                    <label for="inputEmail3" class="col-sm-2 control-label">Role Name:</label>
                    <div class="col-sm-10">
                       <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" required type="text" name="title" id="title" value="{{ old('title', $role->title) }}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">Select Role</label>
                    <div class="col-sm-10">
                        <select class="form-control select2" id="kt_select2_3" name="permissions[]" multiple="multiple" required>
                              @foreach($permissions as $id => $permissions)
                                <option value="{{ $id }}" {{ (in_array($id, old('permissions', [])) || $role->permissions->contains($id)) ? 'selected' : '' }}>{{ $permissions }}</option>
                              @endforeach
                        </select>
                    </div>
                  </div>
                 <!-- /.card-body -->
                <div class="card-footer">
                         <button type="submit" class="btn btn-primary">{{$button}}</button>
                        <a href="{{route('users.index')}}" class="btn btn-danger" type="button"> Cancel</a>
                </div>
   </div>     