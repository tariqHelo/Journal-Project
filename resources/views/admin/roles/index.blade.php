@extends('layouts.admin')

@section('content')
   @include('shared.msg')
	<div class="card card-custom">
		<div class="card-header">
			<div class="card-title">
				<span class="card-icon">
					<i class="flaticon2-favourite text-primary"></i>
				</span>
				<h3 class="card-label">All Roles </h3>
			</div>
			<div class="card-toolbar">
				<!--begin::Button-->
				<a href="{{route('roles.create')}}" class="btn btn-primary font-weight-bolder">
				<i class="la la-plus"></i>New Role</a>
				<!--end::Button-->
			</div>
		</div>
		<div class="card-body">
			<!--begin: Datatable-->
			<table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
				<thead>
					<tr>
						<th>Record ID</th>
						<th>Role</th>
						<th>Permissions</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
				     @foreach($roles as $key => $role)
                        <tr>       
                            <td>
                                {{ $role->id ?? '' }}
                            </td>
                            <td>
                                {{ $role->title ?? '' }}
                            </td>
                            <td>
                                @foreach($role->permissions as $key => $item)
                                    <span class="badge badge-info" >{{ $item->title }}</span>
                                @endforeach
                            </td>
                            <td>
                            
                                @can('role_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('roles.edit', $role->id) }}">
                                        Edit
                                    </a>
                                @endcan
                                @can('role_delete')
                                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('Delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach	
				</tbody>
			</table>
			<!--end: Datatable-->
		</div>
	</div>


@endsection