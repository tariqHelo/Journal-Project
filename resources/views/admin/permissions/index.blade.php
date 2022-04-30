@extends('layouts.admin')

@section('content')
  @include('shared.msg')
	<div class="card card-custom">
		<div class="card-header">
			<div class="card-title">
				<span class="card-icon">
					<i class="flaticon2-favourite text-primary"></i>
				</span>
				<h3 class="card-label">All Permission </h3>
			</div>
			<div class="card-toolbar">
				<!--begin::Button-->
				<a href="{{route('permissions.create')}}" class="btn btn-primary font-weight-bolder">
				<i class="la la-plus"></i>New Record</a>
				<!--end::Button-->
			</div>
		</div>
		<div class="card-body">
			<!--begin: Datatable-->
			<table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
				<thead>
					<tr>
						<th>ID</th>
						<th>Title</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
				   @foreach($permissions as $key => $permission)
                        <tr class="odd gradeX">
                            <th>
                                {{ $permission->id ?? '' }}
                            </th>
                            <th>
                                {{ $permission->title ?? '' }}

                            </th>
                            <td>
                                {{-- @can('permission_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('permissions.show', $permission->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan --}}
                                    <a class="btn btn-xs btn-info" href="{{ route('permissions.edit', $permission->id) }}">
                                        Edit
                                    </a>
                                    <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                    </form>
                            </td>
                        </tr>
                    @endforeach
				</tbody>
			</table>
			<!--end: Datatable-->
		</div>
	</div>
@endsection