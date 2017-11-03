<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvendo a VirtualPet</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<link rel="stylesheet" href="css/estilos.css?version=1.0.18">
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

<div class="col-xs-12 col-sm-8 col-md-9 divPrincipalCent">
	<div class="">
		<div class="todosAnimalesDeCliente">
			<!-- <div class="mascotaPersCliente row mascotaNew">
				<div class="col-xs-2">
					<button class="btn btn-circle-grande btn-success" style="padding-top: -5px"><i class="icofont icofont-paw"></i></button>
				</div>
				<div class="col-xs-6"><h3 style="padding-top: 15px">Agregar nuevo paciente</h3> 
				</div>
			</div> -->
			<div class="container-fluid">
			<ul class="timeline">
				<div class="ribbon-content">
					<div class="ribbon red"><span>Lunes 25 de Noviembre</span></div>
				</div>
				<li class="timeline-inverted">
				  <div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
				  <div class="timeline-panel">
					<div class="timeline-heading">
					  <h4 class="timeline-title blue-text text-darken-1">Consulta</h4>
					  <p class="pull-right">
						<span class="blue-text text-darken-1 mitooltip" title="Dr. Carlos Orihuela Damas"><i class="fa fa-user-md" aria-hidden="true"></i></span>
						<span class="blue-text text-darken-1 mitooltip" title="25/10/2017 9:35 p.m."><i class="fa fa-clock-o" aria-hidden="true"></i> <span style="color: #bfbcbc">9:35 p.m.</span></span>
					  </p>
					</div>
					<div class="timeline-body">
					  <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
					</div>
				  </div>
				</li>
				<li class="timeline-inverted">
				  <div class="timeline-badge primary"><i class="glyphicon glyphicon-credit-card"></i></div>
				  <div class="timeline-panel">
					<div class="timeline-heading">
					  <h4 class="timeline-title">Segundo item</h4>
					</div>
					<div class="timeline-body">
					  <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
					  <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>
					</div>
				  </div>
				</li>
				<div class="ribbon-content">
					<div class="ribbon red"><span>Lunes 24 de Noviembre</span></div>
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
</div>
		</div>
	</div>


</div>
<div class="col-xs-12 col-sm-4 col-md-3  divPrincipalDere panelMascoto">
	<img src="images/perros/peruano.jpg" class="img-responsive img-circle imgAnimalPa" alt="">
	<span class="text-center" style="display: block;"><h3><i class="icofont icofont-animal-dog"></i> <i class="fa fa-venus" aria-hidden="true"></i></h3><h3 class="text-center">Chispitas</h3></span>
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