<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Virtual Pet') }} - @yield('titulo')</title>
	<link rel="icon" type="image/png" href="{{url('images/peto.png')}}" sizes="32x32">

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link rel="stylesheet" href="{{asset('css/icofont.min.css?version=1.0.1.2')}}">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700|Nunito&display=swap" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<style>
		body{
			background: linear-gradient(
		  rgba(0, 0, 0, 0.7), 
		  rgba(0, 0, 0, 0.7)
		), url("images/fons_16.jpg");
			width: 100%;
			opacity: 1;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: right;
			height: 100vh;
		}
		.form-control::placeholder{
			font-size: 1rem;
		}
		#btnRegistro{
			background: linear-gradient(45deg, black, transparent);
			border-color: #f5f1e9;
			color: #f7ecd6;
			padding: 0.5rem 2rem;
			margin: 0;
			line-height: 4rem;

		}
		#btnRegistro:hover{
			background: #ffe3b945;
	color: #ffffff;
		}
		h1,h2,h3,h4,h5{
			font-family: 'Noto Sans', sans-serif;
		}
		p, a, .form-control, button, span, label{
			font-family: 'Nunito', sans-serif;
		}
		#btnAcceder{height: calc(1.5em + 1rem + 2px); padding: 0.5rem 5rem;
	font-size: 1.1rem;
		background: linear-gradient(90deg, #eabe58, #f49d32); color: #fff5b9; border: transparent;
	line-height: 1.5; border-radius: 25px;
		}
		#txtCorreo::placeholder, #txtContrasena::placeholder{
			font-family: "IcoFont", 'Noto Sans', sans-serif;
		}
		.navbar a{
			color: #f3c04e;
		}
		.navbar-brand{font-size: 1.6rem;}
		a{color: #f3a136;}
		#titulo{font-weight: 700; color: #1e1e1e;}
		.modal-body{
			background: url("images/path887.png");
			background-position: top right;
			background-repeat: no-repeat;
			background-size: 25%;
			border-radius: 1.3rem;
		}
		.modal-content{
			border-radius: 1.3rem;

		}
		.close{
			color: #862103;
		}
	</style>
	<div id="app">
		<nav class="navbar navbar-expand-lg fixed-top">
			<div class="container">
				<a class="navbar-brand" href="{{ url('/') }}">
					{{ config('app.name', 'Virtual pet') }}
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">

					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Authentication Links -->
						
						@guest
							<li class="nav-item">
								<a class="nav-link" href="#!" id="btnLogear"><i class="icofont-tick-boxed"></i> Entrar</a>
							</li>
							@if (Route::has('register'))
								<li class="nav-item">
									<a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
								</li>
							@endif
						@else
                        
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ ucwords(Auth::user()->name) }} <span class="caret"></span>
								</a>

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}"
									   onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">
										{{ __('Salir') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</div>
							</li>
						@endguest
					</ul>
				</div>
			</div>
		</nav>

		<main class="py-4">
			@yield('content')
		</main>
	</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
{{-- <script src="{{ asset('js/app.min.js') }}"></script> --}}


@yield('script')
<script>
	$(document).ready(function() {
		$('#btnLogear').click();
		$('#btnLogear').click(function () { console.log( 'boton' );
			$('#modalInicio').modal('show');
		});
	});

</script>
</body>
</html>
