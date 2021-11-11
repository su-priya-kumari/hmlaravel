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
									<h6 class="mb-0">Edit Admin</h6>
									<hr>
								</div>
							</div>
                            
                            @if(Session::has('message')) 
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                        
                            <form method="POST" action="{{route('updatePatientRecord')}}" aria-label="{{ __('Register') }}">

                                @csrf
                                     <input type="hidden" name="id" value="{{$data['id']}}"> 
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            
                                        <div class="col-md-6 mb-3">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$data['email']}}" >
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
            
                                        <div class="col-md-6 mb-3">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{$data['password']}}" required autocomplete="new-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
            
                                        <div class="col-md-6 mb-3">
                                            <input id="password-confirm" type="password" class="form-control" value="{{$data['password']}}" name="password_confirmation" >
                                        </div>
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4 mb-3">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Add') }}
                                            </button>
                                        </div>
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