@extends('panel.estructura')

@section('css')
<style>
	.nav i{
		font-size: 1.5rem;
	}
	.nav a:hover{
		color: #a35bb4!important;
	}
</style>
@endsection

@section('title') Bienvenido @endsection

@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-md-12 col-lg-2 px-0 " id="primeraColumna">
			{{-- Primer columna --}}
			<div id="divCabecera"></div>
			<div class="row">
				<div class="col d-flex justify-content-center pr-0">
					<center>
						<img src="images/cuadrado.png" id="imgCircular" class="img-fluid rounded-circle px-5">
					</center>
				</div>
			</div>
			<h4 class="text-center">Virtual Pet</h4>
			<p class="text-center"><small>Versión. 1.0.1</small></p>
			<h4 class="text-center">Dra. Vane</h4>
			<p class="text-center mb-0"><small>Jirón Manco Segundo, Cercado de Lima 15073</small></p>
			<p class="text-center mb-0"><small>(01) 3378853</small></p>
			<div class="row">
				<div class="col-5 d-flex justify-content-end pr-0">
					<img src="images/def_1.png" id="" class="img-fluid rounded-circle text-center " width="100px">
				</div>
				<div class="col-7 d-flex align-items-center">
					<div>
						<p class="mb-0">
							<strong><span>Amadeo</span></strong>
						</p>
						<p class="mb-0">
							<span>Administrador</span>
						</p>
					</div>
				</div>
			</div>
			{{-- Fin Primer columna --}}
		</div>
		<div class="col-12 col-md-12 col-lg-5 pt-2">

			<div class="card-deck mb-2" id="cartas">
				<div class="card">
					<div class="card-body row">
						<div class="col mx-auto">
							<div class="d-flex justify-content-center">
								<h2><i class="icofont-bathtub"></i> <small>3</small></h2>
							</div>
							<p class="text-center mb-0"><small>Baños</small></p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body row">
						<div class="col mx-auto">
							<div class="d-flex justify-content-center">
								<h2><i class="icofont-fish-5"></i> <small>8</small></h2>
							</div>
							<p class="text-center mb-0"><small>Pacientes</small></p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body row">
						<div class="col mx-auto">
							<div class="d-flex justify-content-center">
								<h2><i class="icofont-box"></i> <small>1</small></h2>
							</div>
							<p class="text-center mb-0"><small>Baños</small></p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body row">
						<div class="col mx-auto">
							<div class="d-flex justify-content-center">
								<h2><i class="icofont-injection-syringe"></i> <small>6</small></h2>
							</div>
							<p class="text-center mb-0"><small>Vacunas</small></p>
						</div>
					</div>
				</div>
				
			</div>

			<div class="card-deck mb-2" id="cartas">
				<div class="card">
					<div class="card-body row">
						<div class="col mx-auto">
							<div class="d-flex justify-content-center">
								<h2><i class="icofont-visa-alt"></i> <small>3</small></h2>
							</div>
							<p class="text-center mb-0"><small>Ventas de productos</small></p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body row">
						<div class="col mx-auto">
							<div class="d-flex justify-content-center">
								<h2><i class="icofont-ambulance-cross"></i> <small>8</small></h2>
							</div>
							<p class="text-center mb-0"><small>Servicios</small></p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body row">
						<div class="col mx-auto">
							<div class="d-flex justify-content-center">
								<h2><i class="icofont-ticket"></i> <small>1</small></h2>
							</div>
							<p class="text-center mb-0"><small>Gastos</small></p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body row">
						<div class="col mx-auto">
							<div class="d-flex justify-content-center">
								<h2><i class="icofont-cart-alt"></i> <small>6</small></h2>
							</div>
							<p class="text-center mb-0"><small>Compras</small></p>
						</div>
					</div>
				</div>
				
			</div>

			<div class="card">
				<div class="card-body">
					<h5><i class="icofont-laboratory"></i> Productos a vencer <span class="badge badge-secondary">3</span></h5>
					<table class="table table-hover table-sm tablaPortada">
						<thead class="thead-dark">
							<tr>
								<th scope="col">Producto</th>
								<th scope="col">Fecha V.</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Coliflox OS</td>
								<td>01/05/2020</td>
							</tr>
							<tr>
								<td>Marbocine 100ml</td>
								<td>21/04/2020</td>
							</tr>
							<tr>
								<td>L-SPECTOMIX® 4.44% Antibiótica Sinérgica</td>
								<td>06/05/2020</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="card mt-2">
				<div class="card-body">
					<h5><i class="icofont-paper"></i> Cuentas por cobrar <span class="badge badge-secondary">4</span> <span class="badge badge-danger">S/ 820.10</span></h5>
					<table class="table table-hover table-sm tablaPortada">
						<thead class="thead-dark">
							<tr>
								<th scope="col">Cliente</th>
								<th scope="col">Cantidad.</th>
								<th scope="col">Motivo.</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-capitalize">angoma inga</td>
								<td>50.50</td>
								<td class="text-capitalize">Baño de espuma</td>
							</tr>
							<tr>
								<td class="text-capitalize">ponce acuña</td>
								<td>159.60</td>
								<td class="text-capitalize">Desparacitación</td>
							</tr>
							<tr>
								<td class="text-capitalize">chavez ferrer</td>
								<td>10.00</td>
								<td class="text-capitalize">comida para perro a delivery</td>
							</tr>
							<tr>
								<td class="text-capitalize">Castillo vasques</td>
								<td>600.00</td>
								<td class="text-capitalize">cirugía de hueso con anestesia y hospitalización de 3 días</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="card mt-2">
				<div class="card-body">
					<h5><i class="icofont-cup-cake"></i> Cumpleaños próximos <span class="badge badge-secondary">2</span></h5>
					<table class="table table-hover table-sm tablaPortada">
						<thead class="thead-dark">
							<tr>
								<th scope="col">Cliente</th>
								<th scope="col">Mascotas</th>
								<th scope="col">Fecha</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>angoma inga</td>
								<td>Petita, negro</td>
								<td>jueves 26 abril</td>
							</tr>
							<tr>
								<td>Domingo salcedo</td>
								<td>Ivy, manchas, iti, randy</td>
								<td>martes 16 marzo</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			

		</div>
		<div class="col-12 col-md-12 col-lg-5 pt-2">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Agenda</h5>
					<div class="form-inline">
						<label for="">Fecha para mostrar: </label>
						<input class="form-control ml-2" type="date" name="" value="2020-04-01">
					</div>
				</div>
			</div>
		

			<div class="card mt-2">
				<div class="card-body">
					<h5><i class="icofont-brand-viber"></i> Citas y emergencias <span class="badge badge-secondary">3</span></h5>
					<table class="table table-hover table-sm tablaPortada">
						<thead class="thead-dark">
							<tr>
								<th scope="col">Cliente</th>
								<th scope="col">Paciente</th>
								<th scope="col">Hora</th>
								<th scope="col">Motivo</th>
								<th scope="col">Doctor</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-capitalize">Oscanoa Rivera</td>
								<td class="text-capitalize">Manchas</td>
								<td>01:50 pm</td>
								<td class="text-capitalize">Corte de pelo</td>
								<td class="text-capitalize">Carlos O.</td>
							</tr>
							<tr>
								<td class="text-capitalize">avila ojeda</td>
								<td class="text-capitalize">tortuga</td>
								<td>06:50 pm</td>
								<td class="text-capitalize">limpieza de caparazón</td>
								<td class="text-capitalize">Roberto S.</td>
							</tr>
							<tr>
								<td class="text-capitalize">Pineda Mauricio</td>
								<td class="text-capitalize">un gato abandonado</td>
								<td>01:50 pm</td>
								<td class="text-capitalize">lavado gastrico por veneno</td>
								<td class="text-capitalize">Pilar C.</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="card mt-2">
				<div class="card-body">
					<h5><i class="icofont-bug"></i> Desparacitaciones <span class="badge badge-secondary">2</span></h5>
					<table class="table table-hover table-sm tablaPortada">
						<thead class="thead-dark">
							<tr>
								<th scope="col">Cliente</th>
								<th scope="col">Paciente</th>
								<th scope="col">Vacuna</th>
								<th scope="col">Obs.</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-capitalize">Alberto Jesus</td>
								<td class="text-capitalize">Chimi</td>
								<td class="text-capitalize">Distemper</td>
								<td class="text-capitalize">Quinta y última</td>
							</tr>
							<tr>
								<td class="text-capitalize">Poma Hurtado</td>
								<td class="text-capitalize">Cigüeña</td>
								<td class="text-capitalize">Antipulgas</td>
								<td class="text-capitalize">para aves</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>


			<div class="card mt-2">
				<div class="card-body">
					<h5><i class="icofont-stethoscope-alt"></i> Controles <span class="badge badge-secondary">2</span></h5>
					<table class="table table-hover table-sm tablaPortada">
						<thead class="thead-dark">
							<tr>
								<th scope="col">Cliente</th>
								<th scope="col">Paciente</th>
								<th scope="col">Motivo</th>
								<th scope="col">Análisis</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-capitalize">Jesus Zapata</td>
								<td class="text-capitalize">tami</td>
								<td class="text-capitalize">revisión de hueso frontal craneano del lado posterior</td>
								<td class="text-capitalize">proceso de cura</td>
							</tr>
							<tr>
								<td class="text-capitalize">Ore Cardenas</td>
								<td class="text-capitalize">Perro vagabundo</td>
								<td class="text-capitalize">quitar la venda de la cirugia</td>
								<td class="text-capitalize">parte pata derecha delantera</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>



		</div>
	</div>

</div>
@endsection