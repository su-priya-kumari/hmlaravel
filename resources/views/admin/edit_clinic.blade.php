@extends('admin.adminbase')
@section('content')
		<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">

			<div class="row">
				<div class="col-12 col-lg-8 d-flex mx-auto">
                    <div class="card radius-10 w-100">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Edit New Clinic</h6>
									<hr>
								</div>
							</div>
							@if(Session::has('message')) 
								<div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
							@endif
                            <form action="{{route('updateClinicRecord')}}" method="POST" enctype="multipart/form-data">
								@csrf
								<input type="hidden" name="id" value="{{$data['id']}}">
								   <div class="form-group mb-3">
									   <label for="clinic_name">Clinic Name</label>
									   <input type="text" name="clinic_name" class="form-control" value="{{$data['clinic_name']}}">
									   @error('clinic_name') <p class="text-danger">{{$message}}</p> @enderror
								   </div>
								   <div class="form-group mb-3">
									   <label for="address">Address</label>
									   <input type="text" name="address" class="form-control" value="{{$data['address']}}">
									   @error('address') <p class="text-danger">{{$message}}</p> @enderror
								   </div>
								   
								   <div class="form-group mb-3">
									   <label for="state">State</label>
									   <input type="text" name="state" class="form-control" value="{{$data['state']}}">
									   @error('state') <p class="text-danger">{{$message}}</p> @enderror
								   </div>
								   <div class="form-group mb-3">
									   <label for="country">Country</label>
									   <input type="text" name="country" class="form-control" value="{{$data['country']}}">
									   @error('country') <p class="text-danger">{{$message}}</p> @enderror
								   </div>
								   <div class="form-group mb-3">
									   <label for="contact">Contact</label>
									   <input type="text" name="contact" class="form-control" value="{{$data['contact']}}">
									   @error('contact') <p class="text-danger">{{$message}}</p> @enderror
								   </div>
								   <div class="form-group mb-3">
									   <label for="specialization">Specialization</label>
									   <input type="text" name="specialization" class="form-control" value="{{$data['specialization']}}">
									   @error('specialization') <p class="text-danger">{{$message}}</p> @enderror
								   </div>
								   <div class="form-group d-grid gap-2">
									   <input type="submit" class="btn btn-dark">
								   </div>
							   </form>
						</div>
					</div>
				</div>
			</div><!--end row-->


		</div>
	</div>
		<!--end page wrapper -->
		
@endsection