@extends('admin.adminbase')
@section('content')
		<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">

			<div class="row row-cols-1 row-cols-xl-2">
				<div class="col d-flex">
					<div class="card radius-10 w-100">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Admin</h6>
								</div>
								  <div class="dropdown ms-auto">
										<button class="btn btn-white btn-sm radius-10 dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
											This Month
										</button>
										<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<li><a class="dropdown-item" href="#">This Week</a></li>
											<li><a class="dropdown-item" href="#">This Month</a></li>
											<li><a class="dropdown-item" href="#">This Year</a></li>
										</ul>
									</div>
							</div>
						  <div id="chart6"></div>
						</div>
					</div>
				</div>
			</div><!--end row-->

			<div class="row">
				<div class="col-12 col-lg-8 d-flex">
                    <div class="card radius-10 w-100">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Geographic</h6>
								</div>
								<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
								</div>
							</div>
                            <div class="" id="geographic-map"></div>
						</div>
					</div>
				</div>
			</div><!--end row-->

			
		</div>
	</div>
		<!--end page wrapper -->
		
@endsection