@extends('layouts.admin')

@section('content')
   @include('shared.msg')
     <!--begin::Card-->
    <div class="card card-custom example example-compact">
        <div class="card-header">
            <h3 class="card-title">Edit User </h3>
           
        </div>
        <!--begin::Form-->
        <form action="{{route('permissions.update' , $permission->id)}}" method="POST" class="form">
            @csrf
            @method('PUT')
            @include('admin.permissions._form',[
                'button' => "Edit"
            ])    
        </form>
    </div>            
@endsection