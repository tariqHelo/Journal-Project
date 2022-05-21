@extends('layouts.admin')

@section('content')
        @include('shared.msg')
        <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-icon">
                        <i class="flaticon2-favourite text-primary"></i>
                    </span>
                    <h3 class="card-label">journal Data</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Dropdown-->
                   
                    <!--end::Dropdown-->
                    <!--begin::Button-->
                    <a href="{{route('journal.create')}}" class="btn btn-primary font-weight-bolder">
                    <i class="la la-plus"></i>New Record</a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                    <thead>
                        <tr> 
                            <th>Trade</th>
                            <th>Entry Date</th>
                            <th>Exit Date</th>
                            <th>Position Nr</th>
                            <th>Symbol</th>

                            <th>Type</th>
                            <th>Size</th>

                            <th>entry_price</th>
                            <th>S/l</th>

                            <th>T/p</th>
                            <th>exit_price</th>
                            <th>EDIT</th> 
                            <th>DELETE</th>
                            <th>commission</th> 
                            <th>swap</th>
                            <th>Profit</th>
                            <th>cccc</th>
                        </tr>
                    </thead>
                    <tbody>
                           
                            @foreach ($journals as $key => $journal)
                                <tr> 
                                    <td>{{++$key}}</td>
                                    <td>{{$journal->entry_date}}</td>
                                    <td>{{$journal->exit_date}}</td>
                                    <td>{{$journal->position_nr}}</td>
                                    <td>{{$journal->symbol}}</td>
                                    <td>{{$journal->type}}</td>
                                    <td>{{$journal->size}}</td>
                                    <td>{{$journal->entry_price}}</td>
                                    <td>{{$journal->s_l}}</td>
                                    <td>{{$journal->t_p}}</td>
                                    <td>{{$journal->exit_price}}</td>
                                    <td> <a href="{{route('journal.edit',$journal->id)}}" class="btn btn-info btn-sm"><i class='fa fa-edit'></i></a></td>
                                    <td> <a href="{{route('J-delete',$journal->id)}}" onclick='return confirm("Are you sure dude?")' class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></a></a></td>

                                    <td>{{$journal->commission}}</td>
                                    <td>{{$journal->swap}}</td>
                                    <td>{{$journal->profit}}</td>
                                     {{-- <td nowrap="nowrap">
                                        <a href="" class="btn btn-info btn-sm"><i class='fa fa-edit'></i></a>
                                        <a href="" onclick='return confirm("Are you sure dude?")' class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></a>

                                    </td> --}}
                                    <td >ccccc</td>
                                </tr>
                            @endforeach                      
                    </tbody>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
						

        <!--end::Card-->
					
@endsection