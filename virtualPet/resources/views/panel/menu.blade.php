<!-- Sidebar  -->
<nav id="sidebar">
	<div id="dismiss" class="d-flex justify-content-center align-items-center">
		<i class="icofont-simple-left-down"></i>
	</div>

	<div class="sidebar-header p-2">
		<img class="img-fluid" src="{{url('images/empresa.png?v=1.1')}}">
	</div>

	<ul class="list-unstyled components">
		<p class="text-center"><small>Versión 1.0.2</small></p>

    <li>
      <a href="{{route('panel')}}"><i class="icofont-hospital"></i> Principal</a>
    </li>
    <li>
      <a href="{{route('mascotas.index')}}"><i class="icofont-elephant"></i> Mascotas</a>
    </li>
    <li>
      <a href="{{route('productos.index')}}"><i class="icofont-box"></i> Productos</a>
    </li>

		<li>
			<a href="configuraciones.php" class="d-flex align-items-center"><i class="icofont-ui-settings"></i>
				Configuraciones</span></a>
		</li>
		
	</ul>
</nav>
<!-- Fin Sidebar  -->

<!--Barra de Menú-->
<nav class="navbar navbar-expand-lg navbar-dark shadow-none mb-0" >
	<div class="container-fluid">
		<button type="button" id="sidebarCollapse" class="btn btn-outline-light tieneMostrar mr-3 px-2">
			<i class="icofont-navigation-menu"></i>
		</button>

		<a class="navbar-brand" href="#!" id="btnBrand">
			<!--<img src="images/logoceid2.png?v=1.1" width="auto" height="45" class="d-inline-block align-top" alt="">  -->
			<span> <i class="icofont-fox-alt"></i> {{ config('app.name') }}</span>
		</a>
		<button class="btn btn-outline-light d-inline-block d-lg-none ml-auto px-2" id="btnSubNavegacion" type="button"
			data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			aria-expanded="false" aria-label="Toggle navigation">
			<i class="icofont-caret-down"></i>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="nav navbar-nav ml-auto">
				<form class="form-inline">
					<input class="form-control mr-sm-2 inputIcon" type="search" id="txtBusquedaGlobal" placeholder="&#xed11;" aria-label="Search">
				</form>
				<span class="navbar-text">
					<a href="{{route('nuevo.registro')}}" class="btn btn-outline-light rounded-circle sinBorde p-2 mx-3" data-toggle="tooltip" data-placement="bottom" title="Registrar"><i class="icofont-first-aid"></i></a>
				</span>
				<span class="navbar-text mr-2">
					<button class="btn btn-outline-light rounded-circle sinBorde p-2 mx-3" data-toggle="tooltip" data-placement="bottom" title="Alertas"><i class="icofont-satellite"></i></button>
					<span class="badge badge-dark ml-n4">1</span>
				</span>

				<li class="nav-item dropdown d-inline-flex">
					<img src="{{url('/images/usuarios/1.png')}}"  alt="..." class="rounded-circle" width="45px" height="45px">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">{{ucwords(Auth::user()->name)}}
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown07">
						<a class="dropdown-item" href="perfil.php"><i class="icofont-id"></i> Mi perfil</a>
						<a class="dropdown-item" href="{{ route('logout') }}"><i class="icofont-exit"></i> Cerrar sesión</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!--Fin de barra de menú-->