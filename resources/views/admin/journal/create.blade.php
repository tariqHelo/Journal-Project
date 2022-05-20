@extends('layouts.admin')

@section('content')
    <!--begin::Card-->
    @include('shared.msg')
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">Journal Data Enery Page</h3>
            </div>
        </div>
        <!--begin::Form-->
       <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            {{-- <div class="card-header">
                <h3 class="card-title">Journal Form</h3>
            </div> --}}
            <!--begin::Form-->
            <form method="POST" action="{{route('journal.store')}}">
               @csrf
                 @include('admin.journal._form', [
                    'button' => 'Add'
                ])
            </form>
        </div>
        <!--end::Form-->
    </div>
    <!--end::Card-->

@endsection    