    {{-- <div class="card-body">
        <div class="form-group">
            <label>Full Name:</label>
            <input type="email" class="form-control" name="name" value="{{ old('name', $user->name ) }}"  placeholder="Enter full name" />
        </div>
        <div class="form-group">
            <label>Email address:</label>
            <input type="email" class="form-control " name="email" value="{{ old('email', $user->email ) }}"  placeholder="Enter email" />
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password @error('password') is-invalid @enderror" class="form-control" placeholder="Enter password" />
             @error('password')
               <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>confirm Password</label>
            <input type="password"  name="password_confirmation" class="form-control @error('password') is-invalid @enderror" placeholder="Enter confirm Password" />
            @error('password')
              <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
         <div class="form-group">
                <label class="col-sm-2 control-label">Select Role</label>
                <div class="col-sm-10">
                    <select class="form-control select2" id="kt_select2_3" name="roles[]" multiple="multiple" required>
                        @foreach($roles as $id => $roles)
                            <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || $user->roles->contains($id)) ? 'selected' : '' }}>{{ $roles }}</option>
                        @endforeach
                </div>
         </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-lg-9 ml-lg-auto">
                <button type="sumbit" class="btn btn-primary mr-2">Submit</button>
                <a href="{{route('users.index')}}" class="btn btn-danger" type="button">Cancel</a>            </div>
        </div>
    </div> --}}
      <!-- /.card-body -->

    <div class="card-body">
                  <div class="form-group row" >
                    <label for="inputEmail3" class="col-sm-2 control-label">Full Name:</label>
                    <div class="col-sm-10">
                      <input type="string" name="name" required class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name ) }}" placeholder="Full Name:">
                      @error('name')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email address:</label>
                    <div class="col-sm-10">
                      <input type="string" required name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email ) }}" placeholder="Email address:">
                      @error('email')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Password">
                      @error('password')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">Password Confirmation</label>
                    <div class="col-sm-10">
                      <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror"  placeholder="Password Confirmation">
                      @error('password')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">Select Role</label>
                    <div class="col-sm-10">
                        <select class="form-control select2" id="kt_select2_3" name="roles[]" multiple="multiple" required>
                            @foreach($roles as $id => $roles)
                                <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || $user->roles->contains($id)) ? 'selected' : '' }}>{{ $roles }}</option>
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