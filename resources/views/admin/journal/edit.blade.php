@extends('layouts.admin')

@section('content')
    <!--begin::Card-->
    @include('shared.msg')
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">Edit Journal </h3>
            </div>
        </div>
        <!--begin::Form-->
       <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            {{-- <div class="card-header">
                <h3 class="card-title">Journal Form</h3>
            </div> --}}
            <!--begin::Form-->
            <form method="PUT" action="{{route('journal.create' ,$journal->id )}}">
               @csrf
               @method('PUT')
               @include('admin.journal._form', [
                    'button' => 'Edit'
                ])
            </form>
        </div>
        <!--end::Form-->
    </div>
    <!--end::Card-->

@endsection    