@extends('layouts.admin')

@section('content')
   @include('shared.msg')
     <!--begin::Card-->
    <div class="card card-custom example example-compact">
        <div class="card-header">
            <h3 class="card-title">Add New Role </h3>
           
        </div>
        <!--begin::Form-->
        <form action="{{route('permissions.store')}}" method="POST" class="form">
            @csrf
            @include('admin.permissions._form',[
                'button' => "Add"
            ])    
        </form>
    </div>            
@endsection