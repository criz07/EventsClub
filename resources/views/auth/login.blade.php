<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
	<title>Events Club a Entertainment Category Website Template | Home :: w3layouts</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/slider.css" rel="stylesheet" type="text/css" media="all" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="../js/jquery.nivo.slider.js"></script>
	<script type="text/javascript">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
		$(window).load(function () {
			$('#slider').nivoSlider();
		});
	</script>
	<style type="text/css">
	.login-form {
		
		width: 340px;
    	margin: 50px auto;
		margin-top: 0px;
	}
	body{
		
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #CECEF6;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
		color: #610B4B;
    }
	.login-form a {
		color: #610B4B;	
	}
	.login-form a1 {
		color: #ffffff;	
	}
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }

    .btn {        
        font-size: 15px;
        font-weight: bold;
		background: #610B4B;
    }
	.checkbox-inline{
			color: #610B4B;
	}
		
		.footer{
			margin-top: 200	}
</style>
	
</head>

<body>
	<div class="header">
		<div class="header_top">
			<div class="wrap">
				<div class="logo">
					<a href="../index.html">
						<img src="../images/logo.png" alt="" />
					</a>
				</div>
				<div class="menu">
					<ul>
						<li class="active">
							<a href="../">INICIO</a>
						</li>
						<li>
							<a href="../eventos">EVENTOS</a>
						</li>
						<li>
							<a href="../galeria">GALLERIA</a>
						</li>
						<li>
							<a href="../blog">BLOG</a>
						</li>
						<li>
							<a href="../contacto">CONTACTO</a>
						</li>
						<li>
							<a href="../acerca">NUESTRO EQUIPO</a>
						</li>
						<li>
							<a href="../register">REGISTRO</a>
						</li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<!------ Slider ------------>
		
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

		<!------End Slider ------------>
	</div>
		
	<div class="footer">
		<div class="wrap">
			<div class="half-footer" style="margin-left:0">
				<!--<ul class="feeds">
					<h3>Our Latest feeds</h3>
					<li>
						<a href="index.html">Lorem ipsum dolor consectetur adiping</a>
					</li>
					<li>
						<a href="blog.html">Nunc sagittis mollis eros, at venenatis</a>
					</li>
					<li>
						<a href="blog.html">Morbi nec dolor ipsum vel congugue</a>
					</li>
					<li>
						<a href="blog.html">Nullam a odio ipsum, at sodales lorem.</a>
					</li>
					<li>
						<a href="contact.html">Nullam imperdiet vulputate congugue</a>
					</li>
				</ul>-->
				<div class="footer-pic">
					<img src="../images/f-icon.png" alt="">
				</div>
				<div class="clear"></div>
			</div>
			<div class="half-footer" style="border:none">
				<!--<ul class="adress">
					<h3>Catch on</h3>
					<li>
						<a href="index.html">Events Club</a>
					</li>
					<li>
						<a href="blog.html">West Coast, CA</a>
					</li>
					<li>
						<a href="blog.html">Facebook - I Music</a>
					</li>
					<li>
						<a href="blog.html">Login</a>
					</li>
					<li>
						<a href="mailto:example@mail.com">yourname(at)companyname.com</a>
					</li>
				</ul>-->
				<div class="footer-pic">
					<img src="../images/foot-icon.png" alt="">
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="copy">
		<p>© 2013 Events Club.All Rights Reserved | Design by
			<a href="http://w3layouts.com">W3Layouts</a>
		</p>
	</div>
</body>

</html>