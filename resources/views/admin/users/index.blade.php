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
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Created  </th>
						<th>Last Updated  </th>
						<th>Role</th>

						<th>Edit</th>
						<th>Delete</th>
						<th>SS</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					   @foreach($users as $key => $user)
							<tr>
								<th>{{ ++$key?? '' }}</th>
								<td>{{ $user->name ?? '' }}</td>
								<td>{{ $user->email ?? '' }}</td>
								<td>{{ $user->created_at->format('Y-m-d') ?? '' }}</td>
								<td>{{ $user->updated_at->format('Y-m-d') ?? '' }}</td>
								<td>
									@foreach($user->roles as $key => $item)
										<span class="badge badge-info">{{ $item->title }}</span>
									@endforeach
								</td>
								<td>
									<a class="btn btn-xs btn-info" href="{{ route('users.edit', $user->id) }}">
										 Edit
									</a>
								</td>
								<td>
									<form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
												<input type="hidden" name="_method" value="DELETE">
												<input type="hidden" name="_token" value="{{ csrf_token() }}">
												<input type="submit" class="btn btn-xs btn-danger" value="Delete">
									</form>
								</td>
								<td>
                                    <a class="btn btn-xs btn-success" href="{{ route('users.edit', $user->id) }}">
										show
									</a>
								</td>
								<td ></td>
							</tr>
                       @endforeach	

				</tbody>
			</table>
			<!--end: Datatable-->
		</div>
	</div>
								<!--begin::Card-->
								{{-- <div class="card card-custom">
									<div class="card-header">
										<div class="card-title">
											<span class="card-icon">
												<i class="flaticon2-favourite text-primary"></i>
											</span>
											<h3 class="card-label">HTML(DOM) Sourced Data</h3>
										</div>
										<div class="card-toolbar">
											<!--begin::Dropdown-->
											<div class="dropdown dropdown-inline mr-2">
												<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="la la-download"></i>Export</button>
												<!--begin::Dropdown Menu-->
												<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
													<ul class="nav flex-column nav-hover">
														<li class="nav-header font-weight-bolder text-uppercase text-primary pb-2">Choose an option:</li>
														<li class="nav-item">
															<a href="#" class="nav-link">
																<i class="nav-icon la la-print"></i>
																<span class="nav-text">Print</span>
															</a>
														</li>
														<li class="nav-item">
															<a href="#" class="nav-link">
																<i class="nav-icon la la-copy"></i>
																<span class="nav-text">Copy</span>
															</a>
														</li>
														<li class="nav-item">
															<a href="#" class="nav-link">
																<i class="nav-icon la la-file-excel-o"></i>
																<span class="nav-text">Excel</span>
															</a>
														</li>
														<li class="nav-item">
															<a href="#" class="nav-link">
																<i class="nav-icon la la-file-text-o"></i>
																<span class="nav-text">CSV</span>
															</a>
														</li>
														<li class="nav-item">
															<a href="#" class="nav-link">
																<i class="nav-icon la la-file-pdf-o"></i>
																<span class="nav-text">PDF</span>
															</a>
														</li>
													</ul>
												</div>
												<!--end::Dropdown Menu-->
											</div>
											<!--end::Dropdown-->
											<!--begin::Button-->
											<a href="#" class="btn btn-primary font-weight-bolder">
											<i class="la la-plus"></i>New Record</a>
											<!--end::Button-->
										</div>
									</div>
									<div class="card-body">
										<!--begin: Datatable-->
										<table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
											<thead>
												<tr>
													<th>Record ID</th>
													<th>Order ID</th>
													<th>Country</th>
													<th>Ship City</th>
													<th>Ship Address</th>
													<th>Company Name</th>
													<th>Ship Date</th>
													<th>Status</th>
													<th>Type</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>
												 
												<tr>
													<td>1</td>
													<td>64616-103</td>
													<td>Brazil</td>
													<td>698 Oriole Pass</td>
													<td>Hayes Boule</td>
													<td>Casper-Kerluke</td>
													<td>10/15/2017</td>
													<td>5</td>
													<td>1</td>
													<td nowrap="nowrap"></td>
												</tr>

											</tbody>
										</table>
										<!--end: Datatable-->
									</div>
								</div> --}}
								<!--end::Card-->
						

@endsection