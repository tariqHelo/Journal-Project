@extends('layouts.admin')

@section('content')
   @include('shared.msg')
     <!--begin::Card-->
    <div class="card card-custom example example-compact">
        <div class="card-header">
            <h3 class="card-title">Edit User </h3>
           
        </div>
        <!--begin::Form-->
        <form action="{{route('roles.update' , $role->id)}}" method="POST" class="form">
            @csrf
            @method('PUT')
            @include('admin.roles._form',[
                'button' => "Edit"
            ])    
        </form>
    </div>            
@endsection