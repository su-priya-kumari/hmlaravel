<!doctype html>
<html lang="en" class="light">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="#" type="image/png" />
	<!--plugins-->
	<link href="{{asset('admin_assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('admin_assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('admin_assets/plugins/highcharts/css/highcharts.cs')}}s" rel="stylesheet" />
	<link href="{{asset('admin_assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
	<link href="{{asset('admin_assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('admin_assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('admin_assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('admin_assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('admin_assets/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('admin_assets/css/icons.css')}}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('admin_assets/css/dark-theme.css')}}" />
	<link rel="stylesheet" href="{{asset('admin_assets/css/semi-dark.css')}}" />
	<link rel="stylesheet" href="{{asset('admin_assets/css/header-colors.css')}}" />
	<title>Admin </title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<a href="{{url('/admin')}}">
					<h4 class="logo-text" href="{{url('/admin')}}">ADMIN</h4>
				</a>
				</div>
				<div class="toggle-icon ms-auto">
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="{{url('/admin')}}">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>					
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Admins</div>
					</a>
					<ul>
						<li> <a href="{{url('/register/admin')}}"><i class="bx bx-right-arrow-alt"></i>Add New</a>
						</li>
						<li> <a href="{{route('updateAdmin')}}"><i class="bx bx-right-arrow-alt"></i>Update</a>
						</li>
					</ul>
				</li>				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Doctors</div>
					</a>
					<ul>
						<li> <a href="{{url('/register/doctor')}}"><i class="bx bx-right-arrow-alt"></i>Add New</a>
						</li>
						<li> <a href="{{route('updateDoctor')}}"><i class="bx bx-right-arrow-alt"></i>Update</a>
						</li>
					</ul>
				</li>				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Patients</div>
					</a>
					<ul>
						<li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Add New</a>
						</li>
						<li> <a href="{{route('updatePatient')}}"><i class="bx bx-right-arrow-alt"></i>Update</a>
						</li>
					</ul>
				</li>				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Clinics</div>
					</a>
					<ul>
						<li> <a href="{{route('addClinic')}}"><i class="bx bx-right-arrow-alt"></i>Add New</a>
						</li>
						<li> <a href="{{route('updateClinic')}}"><i class="bx bx-right-arrow-alt"></i>Update</a>
						</li>
					</ul>
				</li>				
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>

					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">

							-<li class="nav-item dropdown dropdown-large">
							</li>
							<li class="nav-item dropdown dropdown-large">
								<div class="dropdown-menu dropdown-menu-end">
									<div class="header-notifications-list">
									</div>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">									
								<div class="dropdown-menu dropdown-menu-end">	
								    <div class="header-message-list">	
									</div>
								</div>
							</li>
						</ul>
					</div>
					
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a class="btn btn-outline-success" href="{{route('logout')}}"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
						</li>
					</ul>

				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		
		
	
		@yield('content')
		<!--end page wrapper -->
		<!--start overlay-->
		{{-- <div class="overlay toggle-icon"></div> --}}
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	
	<!-- Bootstrap JS -->
	<script src="{{asset('admin_assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{asset('admin_assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('admin_assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('admin_assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('admin_assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{asset('admin_assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
	<script src="{{asset('admin_assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{asset('admin_assets/plugins/highcharts/js/highcharts.js')}}"></script>
	<script src="{{asset('admin_assets/plugins/highcharts/js/exporting.js')}}"></script>
	<script src="{{asset('admin_assets/plugins/highcharts/js/variable-pie.js')}}"></script>
	<script src="{{asset('admin_assets/plugins/highcharts/js/export-data.js')}}"></script>
	<script src="{{asset('admin_assets/plugins/highcharts/js/accessibility.js')}}"></script>
	<script src="{{asset('admin_assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
	<script src="{{asset('admin_assets/js/index.js')}}"></script>
	<!--app JS-->
	<script src="{{asset('admin_assets/js/app.js')}}"></script>
	<script>
		new PerfectScrollbar('.customers-list');
		new PerfectScrollbar('.store-metrics');
		new PerfectScrollbar('.product-list');
	</script>
</body>

</html>