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
                                        <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
            
                                        <div class="col-md-6 mb-3">
                                            <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{$data['firstname'] }}" required autocomplete="firstname" autofocus>
            
                                            @error('firstname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
            
                                        <div class="col-md-6 mb-3">
                                            <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{$data['lastname'] }}" required autocomplete="lastname" autofocus>
            
                                            @error('lastname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>
            
                                        <div class="col-md-6 mb-3">
                                            <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{$data['contact'] }}" required autocomplete="contact" autofocus>
            
                                            @error('contact')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
            
                                        <div class="col-md-6 mb-3">
                                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$data['address'] }}" required autocomplete="address" autofocus>
            
                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>
            
                                        <div class="col-md-6 mb-3">
                                            <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{$data['age'] }}" required autocomplete="age" autofocus>
            
                                            @error('age')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
            
                                        <div class="col-md-6 mb-3">
                                            <input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{$data['gender'] }}" required autocomplete="gender" autofocus>
            
                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            
                                        <div class="col-md-6  mb-3">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$data['email'] }}" required autocomplete="email">
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
            
                                        <div class="col-md-6  mb-3">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{$data['password'] }}" required autocomplete="new-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
            
                                        <div class="col-md-6  mb-3">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{$data['password'] }}" required autocomplete="new-password">
                                        </div>
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
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