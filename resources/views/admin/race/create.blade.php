@extends('layouts.admin')

@section('content')
    <!--begin::Card-->
    @include('shared.msg')
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">Dropzone File Upload Race Excel</h3>
            </div>
        </div>
        <!--begin::Form-->
        <form action="{{route('races.store')}}" method="POST" enctype='multipart/form-data'>
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-form-label col-lg-3 col-sm-12 text-lg-right">Single File Upload</label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="dropzone dropzone-default">
                            {{-- <div class="dropzone-msg dz-message needsclick">
                                <h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
                                <span class="dropzone-msg-desc">This is just a demo dropzone. Selected files are
                                <strong>not</strong>actually uploaded.</span>
                            </div> --}}
                           <input type="file" name="file">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-light-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-primary">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Card-->

@endsection    