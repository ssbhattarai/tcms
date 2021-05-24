{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>

	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Digital Terai" />
	<!-- Favicon icon -->
	<link rel="icon" href="authassets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="authassets/css/style.css">




</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="authassets/images/logo.png" alt="" class="img-fluid mb-4" width="31%">
						<h4 class="mb-3 f-w-400">Signin</h4>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

						<div class="form-group mb-3">
							<label class="floating-label" for="Email">Email address</label>
							<input class="form-control @error('email') is-invalid @enderror" id="Email" placeholder="" name="email" value="{{ old('email') }}" type="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						</div>

						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Password</label>
							<input type="password" class="form-control @error('password') is-invalid @enderror"" id="Password" placeholder="" name="password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						</div>

						<div class="custom-control custom-checkbox text-left mb-4 mt-2">
							<input type="checkbox" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
							<label class="custom-control-label" for="remember">Save credentials.</label>
						</div>
						<button class="btn btn-block btn-primary mb-4">Signin</button>
                    </form>
						{{-- <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
						<p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="authassets/js/vendor-all.min.js"></script>
<script src="authassets/js/plugins/bootstrap.min.js"></script>
<script src="authassets/js/ripple.js"></script>
<script src="authassets/js/pcoded.min.js"></script>



</body>

</html>

