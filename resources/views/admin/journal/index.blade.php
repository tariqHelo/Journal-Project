@extends('layouts.admin')

@section('content')
        @include('shared.msg')
        <!--begin::Card-->
            <div class="card">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">All Information 
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="{{route('journal.create')}}" class="btn btn-primary font-weight-bolder">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle fill="#000000" cx="9" cy="15" r="6" />
                                    <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>New Record</a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable2">
                        <thead>
                            <tr>
                                <th>Trade</th>
                                <th>Entry Date</th>
                                <th>Entry Time</th>
                                <th>Exit Date</th>
                                <th>Position Nr</th>
                                <th>Symbol</th>
                                <th>Type</th>
                                <th>Size</th>
                                <th>entry_price</th>
                                <th>S/l</th>
                                <th>T/p</th>
                                <th>exit_price</th>
                                <th>Profit</th>
                                <th>Comments</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($journals as $journal)
                                <tr> 
                                    <td>{{++$i}}</td>
                                    <td>{{$journal->entry_date}}</td>
                                    <td>{{$journal->entry_time}}</td>
                                    <td>{{$journal->exit_date}}</td>
                                    <td>{{$journal->position_nr}}</td>
                                    <td>{{$journal->symbol}}</td>
                                    <td>{{$journal->type}}</td>
                                    <td>{{$journal->size}}</td>
                                    <td>{{$journal->entry_price}}</td>
                                    <td>{{$journal->s_l}}</td>
                                    <td>{{$journal->t_p}}</td>
                                    <td>{{$journal->exit_price}}</td>
                                    <td>{{$journal->profit}}</td>
                                    <td>{{$journal->desc}}</td>
                                    <td nowrap="nowrap"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
				
@endsection
