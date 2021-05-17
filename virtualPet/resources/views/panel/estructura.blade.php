<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>{{ config('app.name', 'Virtual Pet') }} - @yield('title')</title>
	@include('panel.cabecera')
</head>
<body>
	@yield('css')
<style>
	.navbar-dark{background: linear-gradient(45deg, #e8a01d, #ffc23a);}
	#txtBusquedaGlobal{
		background-color: transparent;
		border: none;
		color: #772a05;
	}
	#txtBusquedaGlobal::placeholder{
		text-align: right;
		color: #fff;
	}
	#txtBusquedaGlobal:focus, #txtBusquedaGlobal:hover { box-shadow: 0 0 0 0.1rem rgba(255, 255, 255, 0.25);}
	
	#divCabecera{
		background-color: #ffc623;
		padding: 5rem;
	}
	#imgCircular{
		margin-top: -7rem!important;
	}
	#primeraColumna{
		min-height: 100vh;
		background: #fff;
	}
	h1,h2,h3,h4,h5{
		color: #696969;
	}
	.table .thead-dark th {
		background-color: #2b359a;
		border-color: #242b77;
	}
	.tablaPortada{
		font-size: 0.9rem;
	}
	#cartas i{ font-size:2.7rem;	}
	.btn-outline-infocat:hover{
		color: #fff;
    background-color: #2b359a;
    border-color: #2b359a;
	}
	.btn-outline-infocat {
    color: #2b359a;
    border-color: #2b359a;
	}
	.btn.focus, .btn:focus{
		box-shadow: 0 0 0 0.2rem rgb(249 185 50)!important;
	}
	.card{
		border: 1px solid rgb(80 78 78 / 13%);
	}
</style>
	@include('panel.menu')

	<div id="app">
		@yield('titulo')
		@yield('contenido')
	</div>

@include('panel.pie')

@yield('script')
<script>
  //$('.selectpicker').selectpicker();
  $('[data-toggle="tooltip"]').tooltip();

</script>

</body>
</html>