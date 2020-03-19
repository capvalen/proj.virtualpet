<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>
	<link rel="icon" type="image/png" href="{{url('images/peto.png')}}" sizes="32x32">

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link rel="stylesheet" href="css/icofont.min.css?version=1.0.1.2">
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
					{{ config('app.name', 'Laravel') }}
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Left Side Of Navbar -->
					<ul class="navbar-nav mr-auto">

					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Authentication Links -->
						Login</a>
						@guest
							<li class="nav-item">
								<a class="nav-link" href="#!" id="btnLogear"><i class="icofont-tick-boxed"></i> 
								<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
							</li>
							@if (Route::has('register'))
								<li class="nav-item">
									<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
								</li>
							@endif
						@else
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}"
									   onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
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

<!-- Modal -->
<div class="modal fade" id="modalInicio" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body container-fluid">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
				</button>
				<h3 class="modal-title text-center my-4" id="titulo"><i class="icofont-fox-alt"></i> Virtual Pet</h3>
				<p class="text-muted">Rellene sus datos:</p>
        <div class="form-group pt-2">
					<input type="text" class="form-control form-control-lg text-center" id="txtCorreo" placeholder='&#xefd9; Correo electrónico' style="background-color: transparent;">
				</div>
        <div class="form-group pt-2">
					<input type="password" class="form-control form-control-lg text-center" id="txtContrasena" placeholder='&#xf01a; Contraseña'>
				</div>
				<div class="form-group pt-2 mb-0 d-flex justify-content-center">
					<button type="button" class="btn btn-primary mx-auto" id="btnAcceder"><i class="icofont-first-aid"></i> Acceder</button>
				</div>
				<div class="form-group pt-2 mb-0">
					<p class="small text-muted">Recuperar su cuenta. <a href="#!">Click aquí</a></p>
				</div>
			</div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
	$(document).ready(function () {
		$('#btnLogear').click();
	});
	$('#btnLogear').click(function () { console.log( 'boton' );
		$('#modalInicio').modal('show');
	})
</script>
</body>
</html>
