@extends('layouts.custom-app')

@section('styles')

@endsection

@section('content')

		<div class="page login-bg1">
			<div class="page-single">
				<div class="container">
					<div class="row">
						<div class="col-md-5 p-md-0">
							<div class="card p-5">
								<div class="pl-4 pt-4 pb-2">
									<a class="header-brand" href="{{url('index')}}">
										<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img custom-logo" alt="Dayonelogo">
										<img src="{{URL::asset('assets/images/brand/logo-white.png')}}" class="header-brand-img custom-logo-dark" alt="Dayonelogo">
									</a>
								</div>
								<div class="p-5 pt-0">
									<h1 class="mb-2">Register</h1>
								</div>
								<form class="card-body pt-3" id="register" name="register" method="POST" action="{{ route('register') }}">
                                    @csrf
									<div class="form-group">
										<label class="form-label">Username</label>
										<input class="form-control" placeholder="Name" name="name" type="Text">
									</div>
									<div class="form-group">
										<label class="form-label">E-Mail</label>
										<input class="form-control" placeholder="Email" name="email" type="email">
									</div>
									<div class="form-group">
										<label class="form-label">Password</label>
										<input class="form-control" placeholder="password" name="password" type="password">
									</div>
                                    <div class="form-group">
										<label class="form-label">Confirm Password</label>
										<input class="form-control" placeholder="password" name="password_confirmation" type="password">
									</div>
									<div class="form-group">
										<label class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
											<span class="custom-control-label">I agree to the <a href="#" class="text-primary">Terms of services</a> and <a href="#" class="text-primary">Privacy policy</a></span>
										</label>
									</div>
									<div class="submit">
										<button type="submit" class="btn btn-primary btn-block">Create Account</button>
									</div>
									<div class="text-center mt-4">
										<p class="text-dark mb-0">Already have an account?<a class="text-primary ml-1" href="{{ route('login') }}">LogIn</a></p>
									</div>
								</form>
								<div class="card-body border-top-0 pb-6 pt-2">
									<div class="text-center">
										<span class="avatar brround mr-3 bg-primary-transparent text-primary"><i class="ri-facebook-line"></i></span>
										<span class="avatar brround mr-3 bg-primary-transparent text-primary"><i class="ri-instagram-line"></i></span>
										<span class="avatar brround mr-3 bg-primary-transparent text-primary"><i class="ri-twitter-line"></i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection('content')

@section('scripts')



@endsection
