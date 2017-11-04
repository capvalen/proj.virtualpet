<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvendo a VirtualPet</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<link rel="stylesheet" href="css/estilos.css?version=1.0.25">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/icofont.css">
	<link rel="stylesheet" href="css/colormaterial.css">
	<link rel="stylesheet" href="css/menuLeftDeslizable.css?version=1.2.2">
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css"> <!-- extraído de: https://eonasdan.github.io/bootstrap-datetimepicker/-->
	<link href="css/bootstrap-select.min.css" rel="stylesheet"> <!-- extraido de: https://silviomoreto.github.io/bootstrap-select/-->
	 <!-- Línea de tiempo y liston extraidos de: 
	 https://bootsnipp.com/snippets/featured/timeline-responsive
	 https://bootsnipp.com/snippets/a3pyD-->

</head>
<body>
<style>

</style>
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
		
		<button class="btn btn-default" id="btnRegresarDueno"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button>
		<button class="btn btn-success btn-outline" id="btnFinalizarAtencion"><i class="fa fa-check" aria-hidden="true"></i> Finalizar atención</button>
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
		<li> <a href="#"><i class="icofont icofont-plugin"></i> Salir</a> </li>
		
	</ul>

</nav>

<div class="col-xs-12 col-sm-8 col-md-9 divPrincipalCent">
	<div class="">
		<div class="todosAnimalesDeCliente">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tabHistoriaClinica" data-toggle="tab">Historia Clínica</a></li>				
			<li ><a href="#tabHistorialCompras" data-toggle="tab">Historial de compras</a></li>
		</ul>
		<div class="tab-content">
			
			<div class="tab-pane fade in active container-fluid" id="tabHistoriaClinica">
				<!-- inicio de tab 2 -->
				<div class="row text-center" style="padding-top: 15px">
					<span class="btn-group btnGrupoBotones">
						<button class="btn btn-success btn-outline dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-stethoscope" aria-hidden="true"></i> Nueva atención <i class="fa fa-caret-down" aria-hidden="true"></i></button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><i class="icofont icofont-prescription"></i> Nueva consulta</a></li>
							<li><a href="#"><i class="icofont icofont-injection-syringe"></i> Vacunas</a></li>
							<li><a href="#"><i class="icofont icofont-bathtub"></i> Spa </a></li>
							<li><a href="#"><i class="icofont icofont-bathtub"></i> Peinado</a></li>
							<li><a href="#"><i class="icofont icofont-injection-syringe"></i> Antiparasitario</a></li>
							<li><a href="#"><i class="icofont icofont-injection-syringe"></i> Antipulgas</a></li>
							<li><a href="#"><i class="icofont icofont-dna"></i> Ecografía</a></li>
							<li><a href="#"><i class="icofont icofont-dna"></i> Rayos X</a></li>
							<li><a href="#"><i class="icofont icofont-laboratory"></i> Análisis clínico</a></li>
							<li><a href="#"><i class="icofont icofont-heartbeat"></i> Hospitalización</a></li>
							<li><a href="#"><i class="icofont icofont-blood-drop"></i> Cirugía</a></li>
						</ul>	
					</span>
					<button class="btn btn-primary btn-outline"><i class="fa fa-comments-o" aria-hidden="true"></i> Nota nueva</button>
					<button class="btn btn-default btn-outline"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Adjuntar archivos</button>
					<button class="btn btn-warning btn-outline"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> Agenda médica</button>
				</div>
				<ul class="timeline">
				<div class="ribbon-content">
					<div class="ribbon red"><span>Lunes 25 de Noviembre</span></div>
				</div>
				<li class="timeline-inverted">
				  <div class="timeline-badge primary"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
				  <div class="timeline-panel">
					<div class="timeline-heading">
					  <h4 class="timeline-title blue-text text-darken-1">Consulta</h4>
					  <span class="pull-right spanConjuntoBotonesHC">
						<span class="blue-text text-darken-1 mitooltip elemTituloHC" title="Dr. Carlos Orihuela Damas"><i class="fa fa-user-md" aria-hidden="true"></i></span>
						<span class="blue-text text-darken-1 mitooltip elemTituloHC" title="25/10/2017 9:35 p.m."><i class="fa fa-clock-o" aria-hidden="true"></i> <span style="color: #bfbcbc">9:35 p.m.</span></span>
						<span class="btn-group btnGrupoBotones">
							<button class="btn btn-xs btn-default btn-outline blue-text text-darken-1 mitooltip elemTituloHC dropdown-toggle" data-toggle="dropdown" title="Acciones"><i class="fa fa-cog" aria-hidden="true"></i></button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#"><i class="fa fa-usd" aria-hidden="true"></i> Facturar</a></li>
								<li><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a></li>
								<li><a href="#"><i class="fa fa-paperclip" aria-hidden="true"></i> Adjuntar un archivo</a></li>
								<li class="divider"></li>
								<li><a href="#"><i class="fa fa-times" aria-hidden="true"></i> Eliminar</a></li>
							</ul>
						</span>
					  </span>
					</div>
					<div class="timeline-body" >
					  <p>Anamnesis y Descripción:</p>
						<p class="resppuestaHCConsulta">El cliente refiere que la mascota está vomitando hace 2 días, no tiene apetito y tampoco toma agua</p>
					  <p>Exámen clínico:</p>
						<p class="resppuestaHCConsulta">Abdomen abultado, ictericia, dolor a la palmación abdominal</p>
					  <p>Constantes:</p>
						<p class="resppuestaHCConsulta">T°: 9.5 °C / FC: 80.00 LPM</p>
					  <p>Diagnóstico:</p>
						<p class="resppuestaHCConsulta"><strong>Cuerpo extraño</strong></p>
					  <p>Pruebas auxiliares requeridas:</p>
						<p class="resppuestaHCConsulta">Ecografía abdominal</p>
					  <p>Tratamiento:</p>
						<p class="resppuestaHCConsulta">Metoclopramida (indicaciones)</p>
					</div>
				  </div>
				</li>
				<li class="timeline-inverted">
				  <div class="timeline-badge warning"><i class="fa fa-comments-o" aria-hidden="true"></i></div>
				  <div class="timeline-panel">
					<div class="timeline-heading">
					  <h4 class="timeline-title yellow-text text-darken-3">Nota extra</h4>
					</div>
					<div class="timeline-body">
					  <p>Mussum ipsum cacilds, vidistis. Pra lá ,  quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
					  <p>Suco eo ersa.</p>
					</div>
				  </div>
				</li>
				<div class="ribbon-content">
					<div class="ribbon red"><span>Lunes 20 de Noviembre</span></div>
				</div>
				
				<li class="timeline-inverted">
				  <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
				  <div class="timeline-panel">
					<div class="timeline-heading">
					  <h4 class="timeline-title">Primer item</h4>
					  <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
					</div>
					<div class="timeline-body">
					  <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
					</div>
				  </div>
				</li>
			   
				</ul>
			</div> <!-- fin de tab 1 -->
			<!-- inicio de tab 1 -->
			<div class="tab-pane fade container-fluid" id="tabHistorialCompras">
				1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, enim, necessitatibus laboriosam qui atque earum expedita autem fugit neque impedit repudiandae quos eius molestiae sequi ea. Praesentium, labore aperiam dolorum.
			</div><!-- fin de tab 2 -->
		</div> <!-- fin de tabcontent -->
			


		</div> <!-- Fin de div todosAnimalesDeCliente -->
	</div>


</div>
<div class="col-xs-12 col-sm-4 col-md-3  divPrincipalDere panelMascoto">
	<img src="images/perros/peruano.jpg" class="img-responsive img-circle imgAnimalPa" alt="">
	<span class="text-center" style="display: block;"><h3><i class="icofont icofont-animal-dog"></i> <i class="fa fa-venus" aria-hidden="true"></i></h3><h3 class="text-center">Chispitas</h3> <button class="btn  btn-default btn-outline blue-text text-darken-1 mitooltip" id="btnEditarDatosMascot" title="" data-original-title="Acciones"><i class="fa fa-pencil" aria-hidden="true"></i></button></span>
	<br>
	<div class="datosAnimalGenerados">
		<div class="col-xs-12"><p><strong>Código Interno: #250</strong></p></div>
		<div class="col-xs-12"><p><strong>Dueño: </strong> Pariona Valencia, Carlos Alex</p></div>
		<div class="col-xs-12"><p><strong>Edad:</strong> 11 meses y 8 días</p></div>
		<div class="col-xs-6"><p><strong>Especie:</strong> Perro</p></div>
		<div class="col-xs-6"><p><strong>Raza:</strong> Mestizo</p></div>
		<div class="col-xs-6"><p><strong>Sexo:</strong> Hembra</p></div>
		<div class="col-xs-6"><p><strong>Color:</strong> Blanco con negro</p></div>
		<div class="col-xs-6"><p><strong>Castrado:</strong> No</p></div>
		<div class="col-xs-6"><p><strong>Reproductor:</strong> Si</p></div>
		<div class="col-xs-6"><p><strong>Adoptado:</strong> No</p></div>
		<div class="col-xs-6"><p><strong>Callejero:</strong> No</p></div>
		<div class="col-xs-12"><p><strong>Código personalizado:</strong> 259090911</p></div>
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
$('#btnFinalizarAtencion').click(function () {
	window.location='cliente.php'
});

</script>

</body>
</html>