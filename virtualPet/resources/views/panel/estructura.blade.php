<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<title>{{ config('app.name', 'Virtual Pet') }} - @yield('title')</title>

	<link rel="icon" type="image/png" href="{{url('images/peto.png')}}" sizes="32x32">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700|Nunito&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{url('css/sidebar.css?version=1.0.13')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
  <script src="https://unpkg.com/ionicons@4.5.1/dist/ionicons.js"></script> <!--Extraido de: https://ionicons.com/ -->
  <link rel="stylesheet" href="{{url('css/icofont.min.css')}}">
  <link rel="stylesheet" href="{{url('css/anatsunamun.css?version=1.0.2')}}" >
  <link rel="stylesheet" href="{{url('css/bootstrap-select.min.css?version=0.4')}}" >
  <link rel="stylesheet" href="{{url('css/bootstrap-material-datetimepicker.css?version=0.1')}}" >
  <link rel="stylesheet" href="{{url('css/animate.css?version=0.0')}}" >
  <link rel="stylesheet" href="{{url('css/alertify.min.css?version=1.0.10')}}" >
	<link rel="stylesheet" href="{{asset('css/easy-autocomplete.min.css?version=1.0.3')}}" > <!-- Extraido de: http://easyautocomplete.com/guide -->
  <link rel="stylesheet" href="{{url('icomoon/style.css')}}" >
  <link rel="stylesheet" href="{{url('css/awesome-bootstrap-checkbox.css?version=1.0')}}" >

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
	</style>
	@include('panel.menu')

	<div id="app">
		@yield('titulo')
		@yield('contenido')
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="{{url('js/moment.min.js')}}"></script>
	<script src="{{url('js/anatsunamun.js?version=1.0.17')}}"></script>
	<script src="{{url('js/bootstrap-select.js?version=1.0.5')}}"></script>
	<script src="{{url('js/bootstrap-material-datetimepicker.js')}}"></script>
	<script src="{{url('js/alertify.min.js?version=1.0.3')}}"></script>
	<script src="{{asset('js/jquery.easy-autocomplete.min.js?version=1.0.2')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
	

@yield('script')
<script>
  //$('.selectpicker').selectpicker();
  $('[data-toggle="tooltip"]').tooltip();

</script>

</body>
</html>