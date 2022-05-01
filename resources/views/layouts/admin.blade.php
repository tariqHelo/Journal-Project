

<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Race Dashboard</title>
		<meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="{{asset('assets/admin/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="{{asset('assets/admin/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{asset('assets/admin/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/admin/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/admin/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="{{asset('assets/admin/css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/admin/css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/admin/css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/admin/css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{asset('assets/admin/media/logos/favicon.ico')}}" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" src="{{asset('assets/admin/media/logos/logo-light.png')}}" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Aside Mobile Toggle-->
				<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
				<!--end::Aside Mobile Toggle-->
				<!--begin::Header Menu Mobile Toggle-->
				<button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<!--end::Header Menu Mobile Toggle-->
				<!--begin::Topbar Mobile Toggle-->
				<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
				<!--end::Topbar Mobile Toggle-->
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
					<!--begin::Brand-->
					<div class="brand flex-column-auto" id="kt_brand">
						<!--begin::Logo-->
						<a href="{{route('dashboard')}}" class="brand-logo">
							<img alt="Logo" src="{{asset('assets/admin/media/logos/logo-light.png')}}" />
						</a>
						<!--end::Logo-->
						<!--begin::Toggle-->
						<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
							<span class="svg-icon svg-icon svg-icon-xl">
								<!--begin::Svg Icon | path:/media/svg/icons/Navigation/Angle-double-left.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
										<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
						</button>
						<!--end::Toolbar-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside Menu-->
					  @include('layouts.menu')
					<!--end::Aside Menu-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					@include('layouts.header')
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-2">
									<!--begin::Page Title-->
									<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard</h5>
									<!--end::Page Title-->
									<!--begin::Actions-->
									<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
									<span class="text-muted font-weight-bold mr-4">#XRS-45670</span>
									<a href="#" class="btn btn-light-warning font-weight-bolder btn-sm">Add New</a>
									<!--end::Actions-->
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center">
									<!--begin::Actions-->
									<a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">Today</a>
									<a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">Month</a>
									<a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">Year</a>
									<!--end::Actions-->
									<!--begin::Daterange-->
									<a href="#" class="btn btn-sm btn-light font-weight-bold mr-2" id="kt_dashboard_daterangepicker" data-toggle="tooltip" title="Select dashboard daterange" data-placement="left">
										<span class="text-muted font-size-base font-weight-bold mr-2" id="kt_dashboard_daterangepicker_title">Today</span>
										<span class="text-primary font-size-base font-weight-bolder" id="kt_dashboard_daterangepicker_date">Aug 16</span>
									</a>
									<!--end::Daterange-->
									<!--begin::Dropdowns-->
									<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
										<a href="#" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="svg-icon svg-icon-success svg-icon-lg">
												<!--begin::Svg Icon |/media/svg/icons/Files/File-plus.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</a>
										<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right py-3">
											<!--begin::Navigation-->
											<ul class="navi navi-hover py-5">
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-drop"></i>
														</span>
														<span class="navi-text">New Group</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-list-3"></i>
														</span>
														<span class="navi-text">Contacts</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-rocket-1"></i>
														</span>
														<span class="navi-text">Groups</span>
														<span class="navi-link-badge">
															<span class="label label-light-primary label-inline font-weight-bold">new</span>
														</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-bell-2"></i>
														</span>
														<span class="navi-text">Calls</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-gear"></i>
														</span>
														<span class="navi-text">Settings</span>
													</a>
												</li>
												<li class="navi-separator my-3"></li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-magnifier-tool"></i>
														</span>
														<span class="navi-text">Help</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-bell-2"></i>
														</span>
														<span class="navi-text">Privacy</span>
														<span class="navi-link-badge">
															<span class="label label-light-danger label-rounded font-weight-bold">5</span>
														</span>
													</a>
												</li>
											</ul>
											<!--end::Navigation-->
										</div>
									</div>
									<!--end::Dropdowns-->
								</div>
								<!--end::Toolbar-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
								<!--begin::Container-->
								<div class="container">
									@if(View::hasSection('content'))
									  @yield('content')
							        @else
										<!--begin::Dashboard-->
										<!--begin::Row-->
										<div class="row">
											<div class="col-lg-6">
												<!--begin::Card-->
												<div class="card card-custom gutter-b">
													<!--begin::Header-->
													<div class="card-header h-auto">
														<!--begin::Title-->
														<div class="card-title py-5">
															<h3 class="card-label">Line Chart</h3>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Header-->
													<div class="card-body">
														<!--begin::Chart-->
														<div id="chart_1"></div>
														<!--end::Chart-->
													</div>
												</div>
												<!--end::Card-->
											</div>
											<div class="col-lg-6">
												<!--begin::Card-->
												<div class="card card-custom gutter-b">
													<div class="card-header">
														<div class="card-title">
															<h3 class="card-label">Area Chart</h3>
														</div>
													</div>
													<div class="card-body">
														<!--begin::Chart-->
														<div id="chart_2"></div>
														<!--end::Chart-->
													</div>
												</div>
												<!--end::Card-->
											</div>
											<div class="col-lg-6">
												<!--begin::Card-->
												<div class="card card-custom gutter-b">
													<div class="card-header">
														<div class="card-title">
															<h3 class="card-label">Column Chart</h3>
														</div>
													</div>
													<div class="card-body">
														<!--begin::Chart-->
														<div id="chart_3"></div>
														<!--end::Chart-->
													</div>
												</div>
												<!--end::Card-->
											</div>
											<div class="col-lg-6">
												<!--begin::Card-->
												<div class="card card-custom gutter-b">
													<div class="card-header">
														<div class="card-title">
															<h3 class="card-label">Area Chart</h3>
														</div>
													</div>
													<div class="card-body">
														<!--begin::Chart-->
														<div id="chart_4"></div>
														<!--end::Chart-->
													</div>
												</div>
												<!--end::Card-->
											</div>
											<div class="col-lg-6">
												<!--begin::Card-->
												<div class="card card-custom gutter-b">
													<div class="card-header">
														<div class="card-title">
															<h3 class="card-label">Mixed Chart</h3>
														</div>
													</div>
													<div class="card-body">
														<!--begin::Chart-->
														<div id="chart_5"></div>
														<!--end::Chart-->
													</div>
												</div>
												<!--end::Card-->
											</div>
											<div class="col-lg-6">
												<!--begin::Card-->
												<div class="card card-custom gutter-b">
													<div class="card-header">
														<div class="card-title">
															<h3 class="card-label">Timeline Chart</h3>
														</div>
													</div>
													<div class="card-body">
														<!--begin::Chart-->
														<div id="chart_6"></div>
														<!--end::Chart-->
													</div>
												</div>
												<!--end::Card-->
											</div>
											<div class="col-lg-6">
												<!--begin::Card-->
												<div class="card card-custom gutter-b">
													<div class="card-header">
														<div class="card-title">
															<h3 class="card-label">Candlestick Chart</h3>
														</div>
													</div>
													<div class="card-body">
														<!--begin::Chart-->
														<div id="chart_7"></div>
														<!--end::Chart-->
													</div>
												</div>
												<!--end::Card-->
											</div>
											<div class="col-lg-6">
												<!--begin::Card-->
												<div class="card card-custom gutter-b">
													<div class="card-header">
														<div class="card-title">
															<h3 class="card-label">Bubble Chart</h3>
														</div>
													</div>
													<div class="card-body">
														<!--begin::Chart-->
														<div id="chart_8"></div>
														<!--end::Chart-->
													</div>
												</div>
												<!--end::Card-->
											</div>
											<div class="col-lg-6">
												<!--begin::Card-->
												<div class="card card-custom gutter-b">
													<div class="card-header">
														<div class="card-title">
															<h3 class="card-label">Scatter Chart</h3>
														</div>
													</div>
													<div class="card-body">
														<!--begin::Chart-->
														<div id="chart_9"></div>
														<!--end::Chart-->
													</div>
												</div>
												<!--end::Card-->
											</div>
											<div class="col-lg-6">
												<!--begin::Card-->
												<div class="card card-custom gutter-b">
													<div class="card-header">
														<div class="card-title">
															<h3 class="card-label">Heatmap Chart</h3>
														</div>
													</div>
													<div class="card-body">
														<!--begin::Chart-->
														<div id="chart_10"></div>
														<!--end::Chart-->
													</div>
												</div>
												<!--end::Card-->
											</div>
											<div class="col-lg-6">
												<!--begin::Card-->
												<div class="card card-custom gutter-b">
													<div class="card-header">
														<div class="card-title">
															<h3 class="card-label">Donut Chart</h3>
														</div>
													</div>
													<div class="card-body">
														<!--begin::Chart-->
														<div id="chart_11" class="d-flex justify-content-center"></div>
														<!--end::Chart-->
													</div>
												</div>
												<!--end::Card-->
											</div>
											<div class="col-lg-6">
												<!--begin::Card-->
												<div class="card card-custom gutter-b">
													<div class="card-header">
														<div class="card-title">
															<h3 class="card-label">Pie Chart</h3>
														</div>
													</div>
													<div class="card-body">
														<!--begin::Chart-->
														<div id="chart_12" class="d-flex justify-content-center"></div>
														<!--end::Chart-->
													</div>
												</div>
												<!--end::Card-->
											</div>
											<div class="col-lg-6">
												<!--begin::Card-->
												<div class="card card-custom gutter-b">
													<div class="card-header">
														<div class="card-title">
															<h3 class="card-label">Radial Bar Chart</h3>
														</div>
													</div>
													<div class="card-body">
														<!--begin::Chart-->
														<div id="chart_13"></div>
														<!--end::Chart-->
													</div>
												</div>
												<!--end::Card-->
											</div>
											<div class="col-lg-6">
												<!--begin::Card-->
												<div class="card card-custom gutter-b">
													<div class="card-header">
														<div class="card-title">
															<h3 class="card-label">Radar Chart</h3>
														</div>
													</div>
													<div class="card-body">
														<!--begin::Chart-->
														<div id="chart_14"></div>
														<!--end::Chart-->
													</div>
												</div>
												<!--end::Card-->
											</div>
										</div>		
						    	</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
										</div>
										<!--end::Row-->
										<!--end::Dashboard-->
									@endif	
								</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					 @include('layouts.footer')
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!-- begin::User Panel-->

		<!-- end::User Panel-->
		<!--end::Demo Panel-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{asset('assets/admin/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/admin/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
		<script src="{{asset('assets/admin/js/scripts.bundle.js')}}"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="{{asset('assets/admin/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{asset('assets/admin/js/pages/widgets.js')}}"></script>
		<!--begin::Page Vendors(used by this page)-->
		<script src="{{asset('assets/admin/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{asset('assets/admin/js/pages/crud/datatables/data-sources/html.js')}}"></script>
		<!--end::Page Scripts-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{asset('assets/admin/js/pages/crud/datatables/basic/scrollable.js')}}"></script>
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{asset('assets/admin/js/pages/crud/file-upload/dropzonejs.js')}}"></script>
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{asset('assets/admin/crud/forms/widgets/select2.js')}}"></script>
			<!--begin::Page Scripts(used by this page)-->
		<script src="{{asset('assets/admin/js/pages/features/charts/apexcharts.js')}}"></script>
		<!--end::Page Scripts-->
		<script>
		    // multi select
			$('#kt_select2_3').select2({
			placeholder: "Select a state",
			});
		</script>
	</body>
	<!--end::Body-->
</html>