<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

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
	
	<title>Events Club a Entertainment Category Website Template | Events :: w3layouts</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	
	<style >
		.header a1{
			color: #610B4B;
		}
	
	</style>
</head>

<body>
	<div class="header">
		<div class="header_top">
			<div class="wrap">
				<div class="logo">
					<a href="welcome">
						<img src="images/logo.png" alt="" />
					</a>
				</div>
				<div class="menu">
					<ul>
						<li>
							<a href="home">INICIO</a>
						</li>
						<li class="active">
							<a href="eventos">EVENTOS</a>
						</li>
						<li>
							<a href="galeria">GALLERIA</a>
						</li>
						<li>
							<a href="blog">BLOG</a>
						</li>
						<li>
							<a href="contacto">CONTACTO</a>
						</li>
						<li>
							<a href="acerca"> EQUIPO</a>
						</li>
						<li>
							@guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTRO') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a1 class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a1>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
						</li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="main">
		<div class="wrap">
			<div class="content_top">
				<div class="events">
					<h2>Deporte</h2>
					<div class="section group">
						<div class="grid_1_of_3 events_1_of_3">
							<div class="event-time">
								<h4>
									<!--<span>sed quia non numqua</span>-->
								</h4>
								<h4>Sep 20, 2013</h4>
							</div>
							<div class="event-img">
								<a href="blog.html">
									<img src="images/Inicio/Rumba2.png" alt="">
									<span>Leer Más</span>
								</a>
							</div>
						</div>
						<!--<div class="grid_1_of_3 events_1_of_3">
							<div class="event-time">
								<h4>
									<span>Sed ut perspiciatis</span>
								</h4>
								<h4>Sep 14TH, 2013</h4>
							</div>
							<div class="event-img">
								<a href="blog.html">
									<img src="images/event-img2.jpg" alt="">
									<span>Read More</span>
								</a>
							</div>
						</div>
						<div class="grid_1_of_3 events_1_of_3">
							<div class="event-time">
								<h4>
									<span> vel illum qui dolorem</span>
								</h4>
								<h4>Sep 5TH, 2013</h4>
							</div>
							<div class="event-img">
								<a href="blog.html">
									<img src="images/event-img3.jpg" alt="">
									<span>Read More</span>
								</a>
							</div>
						</div>-->
					</div>
					<h2>Musica</h2>
					<div class="section group">
						<div class="grid_1_of_3 events_1_of_3">
							<div class="event-time">
								<h4>
									<!--<span>sed quia non numqua</span>-->
								</h4>
								<h4>Sep 20, 2013</h4>
							</div>
							<div class="event-img">
								<a href="blog.html">
									<img src="images/Inicio/Atlantijazz_0.png" alt="">
									<span>Leer Más</span>
								</a>
							</div>
						</div>
						<!--<div class="grid_1_of_3 events_1_of_3">
							<div class="event-time">
								<h4>
									<span>Sed ut perspiciatis</span>
								</h4>
								<h4>Sep 14TH, 2013</h4>
							</div>
							<div class="event-img">
								<a href="blog.html">
									<img src="images/event-img2.jpg" alt="">
									<span>Read More</span>
								</a>
							</div>
						</div>
						<div class="grid_1_of_3 events_1_of_3">
							<div class="event-time">
								<h4>
									<span> vel illum qui dolorem</span>
								</h4>
								<h4>Sep 5TH, 2013</h4>
							</div>
							<div class="event-img">
								<a href="blog.html">
									<img src="images/event-img3.jpg" alt="">
									<span>Read More</span>
								</a>
							</div>
						</div>-->
					</div>
					<h2>Arte</h2>
					<div class="section group">
						<div class="grid_1_of_3 events_1_of_3">
							<div class="event-time">
								<h4>
									<!--<span>sed quia non numqua</span>-->
								</h4>
								<h4>Sep 20, 2013</h4>
							</div>
							<div class="event-img">
								<a href="blog.html">
									<img src="images/Inicio/Cuentos2.png" alt="">
									<span>Leer Más</span>
								</a>
							</div>
						</div>
						<div class="grid_1_of_3 events_1_of_3">
							<div class="event-time">
								<h4>
									<!--<span>Sed ut perspiciatis</span>-->
								</h4>
								<h4>Sep 14, 2013</h4>
							</div>
							<div class="event-img">
								<a href="blog.html">
									<img src="images/Inicio/Killart2.png" alt="">
									<span>Leer Más</span>
								</a>
							</div>
						</div>
						<div class="grid_1_of_3 events_1_of_3">
							<div class="event-time">
								<h4>
									<!--<span> vel illum qui dolorem</span>-->
								</h4>
								<h4>Sep 10, 2013</h4>
							</div>
							<div class="event-img">
								<a href="blog.html">
									<img src="images/Inicio/LaTiendita.PNG" alt="">
									<span>Leer Más</span>
								</a>
							</div>
						</div>
						<div class="grid_1_of_3 events_1_of_3">
							<div class="event-time">
								<h4>
									<!--<span> vel illum qui dolorem</span>-->
								</h4>
								<h4>Sep 5, 2013</h4>
							</div>
							<div class="event-img">
								<a href="blog.html">
									<img src="images/Inicio/Libraq2.png" alt="">
									<span>Leer Más</span>
								</a>
							</div>
						</div>
					</div>
					<h2>Social</h2>
					<div class="section group">
						<div class="grid_1_of_3 events_1_of_3">
							<div class="event-time">
								<h4>
									<!--<span>sed quia non numqua</span>-->
								</h4>
								<h4>Sep 20, 2013</h4>
							</div>
							<div class="event-img">
								<a href="blog.html">
									<img src="images/Inicio/animalaton2.png" alt="">
									<span>Leer Más</span>
								</a>
							</div>
						</div>
						<div class="grid_1_of_3 events_1_of_3">
							<div class="event-time">
								<h4>
									<!--<span>Sed ut perspiciatis</span>-->
								</h4>
								<h4>Sep 14, 2013</h4>
							</div>
							<div class="event-img">
								<a href="blog.html">
									<img src="images/Inicio/CiudadadoHonor2.png" alt="">
									<span>Leer Más</span>
								</a>
							</div>
						</div>
						<div class="grid_1_of_3 events_1_of_3">
							<div class="event-time">
								<h4>
									<!--<span> vel illum qui dolorem</span>-->
								</h4>
								<h4>Sep 10, 2013</h4>
							</div>
							<div class="event-img">
								<a href="blog.html">
									<img src="images/Inicio/Huellitas2.png" alt="">
									<span>Leer Más</span>
								</a>
							</div>
						</div>
						<div class="grid_1_of_3 events_1_of_3">
							<div class="event-time">
								<h4>
									<!--<span> vel illum qui dolorem</span>-->
								</h4>
								<h4>Sep 5, 2013</h4>
							</div>
							<div class="event-img">
								<a href="blog.html">
									<img src="images/Inicio/PetLoversjpg.jpg" alt="">
									<span>Leer Más</span>
								</a>
							</div>
						</div>
						<div class="grid_1_of_3 events_1_of_3">
							<div class="event-time">
								<h4>
									<!--<span> vel illum qui dolorem</span>-->
								</h4>
								<h4>Ago 30, 2013</h4>
							</div>
							<div class="event-img">
								<a href="blog.html">
									<img src="images/Inicio/Tapaton2.png" alt="">
									<span>Leer Más</span>
								</a>
							</div>
						</div>
						<div class="grid_1_of_3 events_1_of_3">
							<div class="event-time">
								<h4>
									<!--<span> vel illum qui dolorem</span>-->
								</h4>
								<h4>Ago 25, 2013</h4>
							</div>
							<div class="event-img">
								<a href="blog.html">
									<img src="images/Inicio/Trueque.jpg" alt="">
									<span>Leer Más</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="wrap">
			<div class="half-footer" style="margin-left:0">
				<ul class="feeds">
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
				</ul>
				<div class="footer-pic">
					<img src="images/f-icon.png" alt="">
				</div>
				<div class="clear"></div>
			</div>
			<div class="half-footer" style="border:none">
				<ul class="adress">
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
				</ul>
				<div class="footer-pic">
					<img src="images/foot-icon.png" alt="">
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