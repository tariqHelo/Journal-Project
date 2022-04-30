

     <div class="card-body">
                  <div class="form-group row" >
                    <label for="inputEmail3" class="col-sm-2 control-label">Permission Name:</label>
                    <div class="col-sm-10">
                        <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $permission->title) }}" required>
                    </div>
                  </div>
                 <!-- /.card-body -->
                <div class="card-footer">
                         <button type="submit" class="btn btn-primary">{{$button}}</button>
                        <a href="{{route('permissions.index')}}" class="btn btn-danger" type="button"> Cancel</a>
                </div>
   </div>     