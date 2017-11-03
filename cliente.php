<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvendo a VirtualPet</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<link rel="stylesheet" href="css/estilos.css?version=1.0.15">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/icofont.css">
	<link rel="stylesheet" href="css/colormaterial.css">
	<link rel="stylesheet" href="css/menuLeftDeslizable.css?version=1.2.1">
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css"> <!-- extraído de: https://eonasdan.github.io/bootstrap-datetimepicker/-->
	<link href="css/bootstrap-select.min.css" rel="stylesheet"> <!-- extraido de: https://silviomoreto.github.io/bootstrap-select/-->
	 <!-- Línea de tiempo y liston extraidos de: 
	 https://bootsnipp.com/snippets/featured/timeline-responsive
	 https://bootsnipp.com/snippets/a3pyD-->

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
		<li> <a href="principal.php"><i class="icofont icofont-check"></i> Inicio</a> </li>
		<li class="active">
			<a href="#grupoClientes" data-toggle="collapse" aria-expanded="false"><i class="icofont icofont-cubes"></i> Clientes</a>
			<ul class="collapse list-unstyled" id="grupoClientes">
				<li><a href="#">Nueva cita</a></li>
				<li><a href="#">Nuevo cliente</a></li>
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
		<li> <a href="#"><i class="icofont icofont-plugin"></i> Salir</a> </li>
		
	</ul>

</nav>
<div class="col-xs-12 col-sm-4 col-md-3 divPrincipalIzq">
	<div class="divPrincCabecera text-center">
	</div>
	<div class="divPricFlotante text-center noselect">
		<img src="images/clientes/repre_adulto.png?version=0.1" alt="" class="img-responsive imgPanel">
		<div class="dataCliente">
			<h3 class="pNomCliente text-center">Pariona Valencia, Carlos Alex</h3>
			<p class="pEdadCliente">30 años</p>
			<p class="pDniCliente">44475064</p>
			<p class="pDireccionCliente">Av. Huancavelica 435</p>
			<p class="pCelularCliente">#977-692108</p>
			<p class="pTelefonoCliente">064-259905</p>
		</div>
	</div>
</div>
<div class="col-xs-12 col-sm-8 col-md-6 divPrincipalCent">
	<div class="panel bs-callout bs-callout-success panel-sombreado" style="margin-bottom: 10px;">
		<div class="panel-heading" role="button" data-toggle="collapse" data-parent="#accordion" href="#ActividadCliente" aria-expanded="true" aria-controls="ActividadCliente">
		  <h4 class="panel-title">
			  <strong class="mayusculas">Actividad del Cliente</strong> <small>Última visita: <span class="lblTiempoCita">hace 7 días</span></small>
		  </h4>
		</div>
		<div id="ActividadCliente" class="panel-collapse collapse in" role="tabpanel" aria-expanded="true" style="">
		  <div class="panel-body">
			<p><span class="text-muted">Registrado el: <span class="creadoEn">Jueves, 26 de Octubre de 2017  a las  5:10 pm</span>.</span></p>
			<p><span class="text-muted">Total de visitas: <strong>5</strong>.</span></p>
		  </div>
		</div>
  	</div>
  	<div class="panel bs-callout bs-callout-danger panel-sombreado" style="margin-bottom: 10px;">
		<div class="panel-heading collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#DeudasCliente" aria-expanded="false" aria-controls="DeudasCliente">
		  <h4 class="panel-title">
			  <strong class="mayusculas">Deudas</strong> <small>S/. <span class="lblTiempoCita">85.00</span></small>
		  </h4>
		</div>
		<div id="DeudasCliente" class="panel-collapse collapse" role="tabpanel" aria-expanded="true" style="">
		  <div class="panel-body">
			<p><span class="text-muted">Registrado el: <span class="creadoEn">Jueves, 26 de Octubre de 2017  a las  5:10 pm</span>.</span></p>
			<p><span class="red-text text-darken-1">Posee una deuda de S/. <span class="creadoEn">85.00</span>.</span></p>
		  </div>
		</div>
  	</div>
	<div class="deep-purple-text text-lighten-1">
		<div class="todosAnimalesDeCliente">
			<div class="mascotaPersCliente row mascotaNew">
				<div class="col-xs-2">
					<button class="btn btn-circle-grande btn-success" style="padding-top: -5px"><i class="icofont icofont-paw"></i></button>
				</div>
				<div class="col-xs-6"><h3 style="padding-top: 15px">Agregar nuevo paciente</h3> 
				</div>
			</div>
			<div class="mascotaPersCliente row">
				<div class="col-xs-2">
					<img src="images/perros/cocker.jpg" class="img-responsive img-circle" alt=""></div>
				<div class="col-xs-5"><h3><i class="icofont icofont-animal-dog"></i> Lola</h3> <h4><small><i class="fa fa-mars" aria-hidden="true"></i> Cocker</small></h4>
					<h5><i class="icofont icofont-clock-time"></i> 4 meses, 2 días</h5>
				</div>
				<div class="col-xs-5">
					<button class="btn btn-circle btn-rojoFresa btn-outline pull-right mitooltip" title="Eliminar paciente"><i class="icofont icofont-heart-beat"></i></button>
					<button class="btn btn-circle btn-negro btn-outline pull-right mitooltip" title="Cambiar de dueño"><i class="icofont icofont-random"></i></button>
					<button class="btn btn-circle btn-success btn-outline pull-right mitooltip" title="Nueva atención"><i class="icofont icofont-stethoscope-alt"></i></button>
					<button class="btn btn-circle btn-morado btn-outline pull-right mitooltip" title="Ver historia clínica"><i class="icofont icofont-file-alt"></i></button>
				</div>
			</div>
			<div class="mascotaPersCliente row">
				<div class="col-xs-2">
					<img src="images/perros/airedale-terrier.jpg" class="img-responsive img-circle" alt=""></div>
				<div class="col-xs-5"><h3><i class="icofont icofont-animal-dog"></i> Gamma</h3> <h4><small> <i class="fa fa-venus" aria-hidden="true"></i> Airedale Terrier</small></h4>
					<h5><i class="icofont icofont-clock-time"></i> 1 año, 5 meses	</h5>
				</div>
				<div class="col-xs-5">
					<button class="btn btn-circle btn-rojoFresa btn-outline pull-right mitooltip" title="Eliminar paciente"><i class="icofont icofont-heart-beat"></i></button>
					<button class="btn btn-circle btn-negro btn-outline pull-right mitooltip" title="Cambiar de dueño"><i class="icofont icofont-random"></i></button>
					<button class="btn btn-circle btn-success btn-outline pull-right mitooltip" title="Nueva atención"><i class="icofont icofont-stethoscope-alt"></i></button>
					<button class="btn btn-circle btn-morado btn-outline pull-right mitooltip" title="Ver historia clínica"><i class="icofont icofont-file-alt"></i></button>
				</div>
			</div>
			<div class="mascotaPersCliente row">
				<div class="col-xs-2">
					<img src="images/gatos/europeo-corto.jpg" class="img-responsive img-circle" alt=""></div>
				<div class="col-xs-5"><h3><i class="icofont icofont-animal-cat-alt-3"></i> Manchas</h3> <h4><small><i class="fa fa-mars" aria-hidden="true"></i> Europeo corto</small></h4>
					<h5><i class="icofont icofont-clock-time"></i> 3 meses, 19 días</h5>
				</div>
				<div class="col-xs-5">
					<button class="btn btn-circle btn-rojoFresa btn-outline pull-right mitooltip" title="Eliminar paciente"><i class="icofont icofont-heart-beat"></i></button>
					<button class="btn btn-circle btn-negro btn-outline pull-right mitooltip" title="Cambiar de dueño"><i class="icofont icofont-random"></i></button>
					<button class="btn btn-circle btn-success btn-outline pull-right mitooltip" title="Nueva atención"><i class="icofont icofont-stethoscope-alt"></i></button>
					<button class="btn btn-circle btn-morado btn-outline pull-right mitooltip" title="Ver historia clínica"><i class="icofont icofont-file-alt"></i></button>
				</div>
			</div>
		</div>
	</div>


</div>
<div class="col-xs-12 col-sm-4 col-md-3 divPrincipalDere">
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


<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/accionesGlobales.js?version=1.0"></script>
<script type="text/javascript" src="js/moment.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js"></script>

<script type="text/javascript">
$(document).ready(function () {
	$('.mitooltip').tooltip();
	// $('.selectpicker').selectpicker('render');

	$('.divPrincipalDere').niceScroll({
		 cursorcolor: '#53619d',
		 cursorwidth: 4,
		 cursorborder: 'none'
	 });
	$("#sidebar").niceScroll({
		 cursorcolor: '#53619d',
		 cursorwidth: 4,
		 cursorborder: 'none'
	 });

	 $('#dismiss, .overlay').on('click', function () {
		$('#sidebar').removeClass('active');
		$('.overlay').fadeOut();
	 });

	 $('.btnMenuGeneral').on('click', function () {
		 $('#sidebar').addClass('active');
		 $('.overlay').fadeIn();
		 $('.collapse.in').toggleClass('in');
		 $('a[aria-expanded=true]').attr('aria-expanded', 'false');
	 });
});
$(function () {
	$('#datetimepicker12').datetimepicker({ inline: true, sideBySide: false, format: 'LL', locale: 'es'});
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
$('.mascotaPersCliente').click(function () {
	window.location='paciente.php';
});
</script>

</body>
</html>