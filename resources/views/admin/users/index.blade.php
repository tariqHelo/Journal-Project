@extends('layouts.admin')

@section('content')
     @include('shared.msg')
	<div class="card card-custom">
		<div class="card-header">
			<div class="card-title">
				<span class="card-icon">
					<i class="flaticon2-favourite text-primary"></i>
				</span>
				<h3 class="card-label">All Users </h3>
			</div>
			@can('upload_excel')
				<div class="card-toolbar">
					<!--begin::Dropdown-->
					<!--end::Dropdown-->
					<!--begin::Button-->
					<a href="{{route('users.create')}}" class="btn btn-primary font-weight-bolder">
					<i class="la la-plus"></i>New User</a>
					<!--end::Button-->
				</div>	
			@endcan
			
		</div>
		<div class="card-body">
			<!--begin: Datatable-->
			<table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
				<thead>
					<tr>
						<th>Record ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Role</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					   @foreach($users as $key => $user)
							<tr>
							
								<th>
									{{ ++$key?? '' }}
								</th>
								<td>
									{{ $user->name ?? '' }}
								</td>
								<td>
									{{ $user->email ?? '' }}
								</td>
								<td>
									@foreach($user->roles as $key => $item)
										<span class="badge badge-info">{{ $item->title }}</span>
									@endforeach
								</td>
								<td>
									
									@can('user_edit')
										<a class="btn btn-xs btn-info" href="{{ route('users.edit', $user->id) }}">
											Edit
										</a>
									@endcan

									@can('user_delete')
										<form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
											<input type="hidden" name="_method" value="DELETE">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<input type="submit" class="btn btn-xs btn-danger" value="Delete">
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