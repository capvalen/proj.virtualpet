<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvendo a VirtualPet</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<link rel="stylesheet" href="css/estilos.css?version=1.0.29">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/icofont.css">
	<link rel="stylesheet" href="css/colormaterial.css">
	<link rel="stylesheet" href="css/menuLeftDeslizable.css?version=1.2.1">
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css"> <!-- extraído de: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
	<link href="css/animate.css" rel="stylesheet">

	<link href="css/bootstrap-select.min.css" rel="stylesheet"> <!-- extraido de: https://silviomoreto.github.io/bootstrap-select/ -->

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
	<div class="navbar-header">
	  <button class="btn btn-defaul navbar-toggle collapsed btnMenuGeneral" style="margin-top:5px; margin-left: 5px;"><i class="fa fa-bars" aria-hidden="true"></i></button>
	  <a class="navbar-brand" ><img alt="Brand" src="images/VirtualLargo.png"></a>
	</div>

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<div class="navbar-form navbar-left">
			<button class="btn btn-defaul btnMenuGeneral"><i class="fa fa-bars" aria-hidden="true"></i></button>
			
		</div>
		<a class="navbar-brand" href="#">
			<img alt="Brand" src="images/VirtualLargo.png"> 
		</a>

	  <div class="navbar-form navbar-right">
		<div class="form-group">
		  <input type="text" class="form-control" style="border: 0px solid #ccc;" id="txtBuscarTermino" placeholder="Buscar por nombre, Dni, N° HC, Tlf.">
		</div>
		<button class="btn btn-default" id="btnBuscarGeneral"><i class="fa fa-search" aria-hidden="true"></i></button>
		<button class="btn btn-default btnAddNewGeneral" id=""><i class="fa fa-user-plus" aria-hidden="true"></i></button>
	  </div>
	 
	</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="overlay"></div>
<nav id="sidebar">
	<div id="dismiss">
		<i class="icofont icofont-close"></i>
	</div>

	<div class="sidebar-header">
		<img alt="Brand" src="images/VirtualCorto.png" class="img-responsive"> 
	</div>

	<ul class="list-unstyled components">
		<li class="active"> <a href="#"><i class="icofont icofont-check"></i> Inicio</a> </li>
		<li>
			<a href="#grupoClientes" data-toggle="collapse" aria-expanded="false"><i class="icofont icofont-cubes"></i> Clientes</a>
			<ul class="collapse list-unstyled" id="grupoClientes">
				<li><a href="#">Nueva cita</a></li>
				<li><a href="#!" class="btnAddNewGeneral">Nuevo cliente</a></li>
				<li><a href="#">Administrar clientes</a></li>
				<li><a href="#">Cuentas pendientes</a></li>
			</ul>
		</li>
		<li>
			<a href="#grupoCaja" data-toggle="collapse" aria-expanded="false"><i class="icofont icofont-shopping-cart"></i> Ventas en Caja</a>
			<ul class="collapse list-unstyled" id="grupoCaja">
				<li><a href="#">Nueva venta</a></li>
				<li><a href="#">Cuadrar caja</a></li>
			</ul>
		</li>
		<li>
			<a href="#grupoProductos" data-toggle="collapse" aria-expanded="false"><i class="icofont icofont-cubes"></i> Productos</a>
			<ul class="collapse list-unstyled" id="grupoProductos">
				<li><a href="#">Nuevo producto</a></li>
				<li><a href="#">Fechas de vecimiento</a></li>
				<li><a href="#">Stock</a></li>
				<li><a href="#">Todos los productos</a></li>
			</ul>
		</li>
		<li>
			<a href="#grupoServicios" data-toggle="collapse" aria-expanded="false"><i class="icofont icofont-cubes"></i> Servicios</a>
			<ul class="collapse list-unstyled" id="grupoServicios">
				<li><a href="#">Nuevo servicio</a></li>
				<li><a href="#">Todos los productos</a></li>
			</ul>
		</li>
		<li> <a href="#"><i class="icofont icofont-clock-time"></i> Calendario</a> </li>
		<li> <a href="#"><i class="icofont icofont-cube"></i> Proveedores</a> </li>
		<li> <a href="#"><i class="icofont icofont-black-board"></i> Reportes</a> </li>
		<li>
			<a href="#grupoMicuenta" data-toggle="collapse" aria-expanded="false"><i class="icofont icofont-social-ebuddy"></i> Mi Cuenta</a>
			<ul class="collapse list-unstyled" id="grupoMicuenta">
				<li><a href="#">Ver mi perfil</a></li>
				<li><a href="#">Cambiar contraseña</a></li>
			</ul>
		</li>
		<li> <a href="#"><i class="icofont icofont-flag"></i> Acerca de...</a> </li>
		<li> <a href="#" id="btnSalirSistema"><i class="icofont icofont-plugin"></i> Salir</a> </li>
		
	</ul>

</nav>
<div class="col-xs-12 col-sm-12 col-md-3 divPrincipalIzq">
	<div class="divPrincCabecera">	
	</div>
	<div class="divPricFlotante text-center noselect">
		<img src="images/logoEmpresa.svg" alt="" class="img-responsive img-circle imgPanel">
		<h3 class="text-center">Infocat Virtual Pet <small><?php require 'php/version.php'; ?></small></h3>
		<p class="pNomVeterinaria"><strong>Veterinaria Demo</strong></p>
		<p class="pDireccVeterinaria">Av. Huancavelica 435</p>
		<p class="pCelVeterinaria">#977-692108</p>
		<span id="contImgDark"><img src="images/316055_2431106253308_763455784_n.jpg" alt="" class="img-responsive img-circle imgUserPanel"></span>
		<p class="pCelVeterinaria"><strong>Pariona Valencia, Carlos Alex</strong></p>
		<p class="pCelVeterinaria">Administrador</p>
	</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 divPrincipalCent">
	<h4 class="text-center" id="holaHoy">Resumen de hoy <small>Martes, 25 de Octubre 2017</small></h4>
	
	<div class="cuadroResFrontal blue-text"><h3 class="blue-text"><i class="fa fa-address-book-o" aria-hidden="true"></i> 5</h3><p>Visitas</p></div>
	<div class="cuadroResFrontal blue-text"><h3 class="blue-text"><i class="fa fa-font-awesome" aria-hidden="true"></i> 7</h3><p>Pacientes atendidos</p></div>
	<div class="cuadroResFrontal amber-text"><h3 class="amber-text"><i class="fa fa-cart-plus" aria-hidden="true"></i> <small class="amber-text">S/.</small>80.60</h3><p>Ingreso por productos</p></div>
	<div class="cuadroResFrontal amber-text"><h3 class="amber-text"><i class="fa fa-cart-plus" aria-hidden="true"></i> <small class="amber-text">S/.</small>153.40</h3><p>Ingreso por servicios</p></div>
	<div class="cuadroResFrontal amber-text"><h3 class="amber-text"><i class="fa fa-external-link-square" aria-hidden="true"></i> <small class="amber-text">S/.</small>24.60</h3><p>Egresos</p></div>
	<div class="cuadroResFrontal red-text"><h3 class="red-text"><i class="fa fa-bug" aria-hidden="true"></i> 11</h3><p>Productos por vencer</p></div>
	<div class="cuadroResFrontal red-text"><h3 class="red-text"><i class="fa fa-bug" aria-hidden="true"></i> 8</h3><p>Productos vencidos</p></div>


</div>
<div class="col-xs-12 col-sm-12 col-md-3 divPrincipalDere">
	<div class="oscuroBuscar"></div>
	<h4 class="text-center" id="cambiarAgenCalendario">Agenda</h4>
	<div class="container-fluid noselect" id="cuadroResumenActividades">
		<div class="row text-center">
			<small>Tipo de actividad</small><br>
			<div id="cmbActividadVet">
				<select class="selectpicker mayuscula" title="Servicios..."  data-live-search="true">
					<?php require 'php/listarServiciosOpt.php'; ?>
				</select>
			</div>
		</div>
		<div class="row hidden" id="conjuntoBagnes2">
			<p class="divResumenActividad"><span>Se encontró <strong>9</strong> resultados.</span>
				<button class="btn btn-danger btn-outline btn-sm pull-right mitooltip" id="btnBorrarFiltro" title="Borrar filtro" style="margin-top: -5px"><i class="icofont icofont-close"></i></button></p>
		</div>
		<div class="row" id="conjuntoBagnes">
			<div class="col-xs-3 divResumenActividad active">Hoy <span class="badge"><span id="count">3</span></span></div>
			<div class="col-xs-4 divResumenActividad">Semana <span class="badge"><span id="count">5</span></span></div>
			<div class="col-xs-3 divResumenActividad">Mes <span class="badge"><span id="count">9</span></span></div>
		</div>
		
		<div class="resultadosConsultaActividad">
			<div class="row unItemResultado mitooltip" title="Desparasitación" data-placement="top" >
				<div class="col-xs-3 divVerCenter"><img src="images/desparasitaClip.svg" class="img-responsive" alt=""><small>#1</small></div>
				<div class="col-xs-9 divContenidoDetalle">
					<p><i class="blue-text text-blue.lighten-1 fa fa-user-circle-o" aria-hidden="true"></i> Pariona Valencia, Carlos Alex</p>
					<p><i class="blue-text text-blue.lighten-1 icofont icofont-animal-paw"></i> Manchas</p>
					<p><i class="icofont icofont-clock-time blue-text text-blue.lighten-1"></i> Jueves, 02 de Noviembre 2017</p>
				</div>
			</div>
			<div class="row unItemResultado mitooltip" title="Cita de revisión" data-placement="top" >
				<div class="col-xs-3 divVerCenter"><img src="images/citaClip.svg" class="img-responsive" alt=""><small>#2</small></div>
				<div class="col-xs-9 divContenidoDetalle">
					<p><i class="icofont icofont-clock-time blue-text text-blue.lighten-1"></i> Jueves, 02 de Noviembre 2017</p>
					<p><i class="blue-text text-blue.lighten-1 fa fa-user-circle-o" aria-hidden="true"></i> Queirolo Rusell, Santiago </p>
					<p><i class="blue-text text-blue.lighten-1 icofont icofont-animal-paw"></i> Arwen</p>
				</div>
			</div>
			<div class="row unItemResultado mitooltip" title="Vacuna" data-placement="top" >
				<div class="col-xs-3 divVerCenter"><img src="images/vacunaClip.svg" class="img-responsive" alt=""><small>#3</small></div>
				<div class="col-xs-9 divContenidoDetalle">
					<p><i class="icofont icofont-clock-time blue-text text-blue.lighten-1"></i> Jueves, 02 de Noviembre 2017</p>
					<p><i class="blue-text text-blue.lighten-1 fa fa-user-circle-o" aria-hidden="true"></i> Orihuela Damas, Carlos</p>
					<p><i class="blue-text text-blue.lighten-1 icofont icofont-animal-paw"></i> Michito</p>
				</div>
			</div>
			<div class="row unItemResultado mitooltip" title="Desparasitación" data-placement="top" >
				<div class="col-xs-3 divVerCenter"><img src="images/desparasitaClip.svg" class="img-responsive" alt=""><small>#4</small></div>
				<div class="col-xs-9 divContenidoDetalle">
					<p><i class="icofont icofont-clock-time blue-text text-blue.lighten-1"></i> Jueves, 02 de Noviembre 2017</p>
					<p><i class="blue-text text-blue.lighten-1 fa fa-user-circle-o" aria-hidden="true"></i> Pariona Valencia, Carlos Alex</p>
					<p><i class="blue-text text-blue.lighten-1 icofont icofont-animal-paw"></i> Manchas</p>
				</div>
			</div>
			<div class="row unItemResultado mitooltip" title="Cita de revisión" data-placement="top" >
				<div class="col-xs-3 divVerCenter"><img src="images/citaClip.svg" class="img-responsive" alt=""><small>#5</small></div>
				<div class="col-xs-9 divContenidoDetalle">
					<p><i class="icofont icofont-clock-time blue-text text-blue.lighten-1"></i> Jueves, 02 de Noviembre 2017</p>
					<p><i class="blue-text text-blue.lighten-1 fa fa-user-circle-o" aria-hidden="true"></i> Acuña Castro, Clara</p>
					<p><i class="blue-text text-blue.lighten-1 icofont icofont-animal-paw"></i> Arwen</p>
				</div>
			</div>
			<div class="row unItemResultado mitooltip" title="Vacuna" data-placement="top" >
				<div class="col-xs-3 divVerCenter"><img src="images/vacunaClip.svg" class="img-responsive" alt=""><small>#6</small></div>
				<div class="col-xs-9 divContenidoDetalle">
					<p><i class="icofont icofont-clock-time blue-text text-blue.lighten-1"></i> Jueves, 02 de Noviembre 2017</p>
					<p><i class="blue-text text-blue.lighten-1 fa fa-user-circle-o" aria-hidden="true"></i> Orihuela Damas, Carlos</p>
					<p><i class="blue-text text-blue.lighten-1 icofont icofont-animal-paw"></i> Michito</p>
				</div>
			</div>
			<div class="row unItemResultado mitooltip" title="Desparasitación" data-placement="top" >
				<div class="col-xs-3 divVerCenter"><img src="images/desparasitaClip.svg" class="img-responsive" alt=""><small>#7</small></div>
				<div class="col-xs-9 divContenidoDetalle">
					<p><i class="icofont icofont-clock-time blue-text text-blue.lighten-1"></i> Jueves, 02 de Noviembre 2017</p>
					<p><i class="blue-text text-blue.lighten-1 fa fa-user-circle-o" aria-hidden="true"></i> Pariona Valencia, Carlos Alex</p>
					<p><i class="blue-text text-blue.lighten-1 icofont icofont-animal-paw"></i> Manchas</p>
				</div>
			</div>
			<div class="row unItemResultado mitooltip" title="Cita de revisión" data-placement="top" >
				<div class="col-xs-3 divVerCenter"><img src="images/citaClip.svg" class="img-responsive" alt=""><small>#8</small></div>
				<div class="col-xs-9 divContenidoDetalle">
					<p><i class="icofont icofont-clock-time blue-text text-blue.lighten-1"></i> Jueves, 02 de Noviembre 2017</p>
					<p><i class="blue-text text-blue.lighten-1 fa fa-user-circle-o" aria-hidden="true"></i> Acuña Castro, Clara</p>
					<p><i class="blue-text text-blue.lighten-1 icofont icofont-animal-paw"></i> Arwen</p>
				</div>
			</div>
			<div class="row unItemResultado mitooltip" title="Vacuna" data-placement="top" >
				<div class="col-xs-3 divVerCenter"><img src="images/vacunaClip.svg" class="img-responsive" alt=""><small>#9</small></div>
				<div class="col-xs-9 divContenidoDetalle">
					<p><i class="icofont icofont-clock-time blue-text text-blue.lighten-1"></i> Jueves, 02 de Noviembre 2017</p>
					<p><i class="blue-text text-blue.lighten-1 fa fa-user-circle-o" aria-hidden="true"></i> Orihuela Damas, Carlos</p>
					<p><i class="blue-text text-blue.lighten-1 icofont icofont-animal-paw"></i> Michito</p>
				</div>
			</div>

		</div>


		
	</div>
	<div style="overflow:hidden;" class="hidden" id="divCalendario">
		<div class="form-group">
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2"> <div id="datetimepicker12"></div> </div>
			</div>
		</div>
	   
	</div>

</div>

<?php include 'php/llamandoModals.php'; ?>

<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/accionesGlobales.js?version=1.0.12"></script>
<script type="text/javascript" src="js/moment.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js"></script>

<script type="text/javascript">
datosUsuario();
$(document).ready(function () {
	// $('.selectpicker').selectpicker('render');
});

$('#cambiarAgenCalendario').click(function () {
	$('#divCalendario').toggleClass('hidden');
	$('#cuadroResumenActividades').toggleClass('hidden');
});
$('.divResumenActividad').click(function () {
	$('.divResumenActividad').removeClass('active');
	$(this).addClass('active');
});

$('#cmbActividadVet').on('click','.optActividadVeter',function () {
	console.log('Seleccionaste: '+$(this).attr('data-tokens'));
	$('#conjuntoBagnes').addClass('hidden');
	$('#conjuntoBagnes2').removeClass('hidden');
});
</script>

</body>
</html>