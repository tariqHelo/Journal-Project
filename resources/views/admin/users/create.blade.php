@extends('layouts.admin')

@section('content')
   @include('shared.msg')
     <!--begin::Card-->
    <div class="card card-custom example example-compact">
        <div class="card-header">
            <h3 class="card-title">Add New User </h3>
           
        </div>
        <!--begin::Form-->
        <form action="{{route('users.store')}}" method="POST" class="form">
            @csrf
            @include('admin.users._form',[
                'button' => "Add"
            ])    
        </form>
    </div>            
@endsection