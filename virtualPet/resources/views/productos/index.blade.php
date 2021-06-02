@extends('panel.estructura')

@section('css')
<style>
	#contRegistro .form-control{
		margin: 0.5rem 0;
	}
	h5{
		margin: 0 0 1rem 0;
	}
	.popover-body h5{
		color:#737373;
	}
</style>
@endsection

@section('title') Productos @endsection
@section('contenido')
<div class="container-fluid ">
	<div class="row mx-2">
		<h1 class="my-3"><i class="icofont-box"></i> Productos y Servicios</h1>
	</div>
	<div class="row">
		<div class="col col-sm-12 col-md-12 col-lg-3 col-xl-2 mb-3">
			<div class="card">
				<div class="card-body" id="contRegistro">
					<h5><i class="icofont-cube"></i> Registro de nuevo producto</h5>
					<div class="form-group mb-1">
						<select id="sltTipoProducto" class="form-control" name="">
							<option>Fármaco</option>
							<option>Servicio</option>
							<option>Jarabe</option>
							<option>Inyectable</option>
							<option>Antipulgas</option>
							<option>Crema</option>
							<option>Antiparasitario</option>
							<option>Vacuna</option>
							<option>Pastilla</option>
							<option>Juguete</option>
							<option>Shampoo</option>
							<option>Antibióticos</option>
							<option>Antiinflamatorios</option>
							<option>Protectores hepaticos</option>
							<option>Protectores gástricos</option>
						</select>
					</div>
					<input class="form-control" type="text" placeholder="Nombre ">
					<input class="form-control" type="number" placeholder="Precio">
					<input class="form-control" type="number" placeholder="Stock inicial">
					<button class="btn btn-outline-infocat btn-block"><i class="icofont-plus-square"></i> Registrar</button>
					

				</div>
			</div>
		</div>
		<div class="col col-sm-12 col-md-12 col-lg-5 col-xl-5 mb-3">
			<div class="card">
				<div class="card-body">
					<h5><i class="icofont-fish-5"></i> Lista Productos/Servicios</h5>
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Código, o nombre de producto" aria-describedby="button-addon2">
						<div class="input-group-append">
							<button class="btn btn-outline-infocat" type="button" id="button-addon2"><i class="icofont-search-1"></i> Buscar</button>
						</div>
					</div>
					<div class="row">
						<table class="table table-hover tablaPortada">
							<thead class="thead-dark">
								<tr>
									<th>Cod.</th>
									<th>Nombre de producto</th>
									<th>Stock</th>
									<th>Precio</th>
									<th>Tipo</th>
								</tr>
							</thead>
							<tbody>
								<tr data-toggle="popover" onclick="window.location.href = '{{route('producto.detalle')}}'" class="salirPop">
									<td >P-1</td>
									<td>Corte de pelo</td>
									<td>-</td>
									<td>45.00</td>
									<td>Servicio</td>
								</tr>
								<tr data-toggle="popover" onclick="window.location.href = '{{route('producto.detalle')}}'" class="salirPop">
									<td>P-6</td>
									<td>LABHIDRO AD3E INYECTABLE</td>
									<td>6</td>
									<td>33.50</td>
									<td>Inyectable</td>
								</tr>
							</tbody>
						</table>
					</div>

				</div>
			</div>
			
		</div>
		<div class="col col-sm col-lg-4 col-xl-5 mb-3">
			<div class="card">
				<div class="card-body">
					<h5><i class="icofont-ui-calendar"></i> Productos con observaciones</h5>

					<table class="table table-hover tablaPortada">
						<thead class="thead-dark">
							<tr>
								<th>Producto</th>
								<th>Que pasa</th>
								<th>Dato</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>HIPRAVIAR-SHS</td>
								<td>Vence</td>
								<td>24/6/2021</td>
							</tr>
							<tr>
								<td>KAWU COLLAR ANTIPARASITARIO</td>
								<td>Por agotar</td>
								<td>6 und.</td>
							</tr>
							<tr>
								<td>LINESVALL PREMEZCLA</td>
								<td>Agotado</td>
								<td>-1 und.</td>
							</tr>
							<tr>
								<td>MACROMUTIN 12,5%SOLUCION ORAL AVES Y CERDOS</td>
								<td>Vencido</td>
								<td>10/01/2021</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			
			
		</div>
	</div>
</div>
@endsection
@section('script')
<script>
	$(function () {
		$('.salirPop').popover({
			placement : 'top',
			trigger: 'hover',
			html : true,
			content : '<div class="container-fluid"> <div class="row "><h5>Jhon Carter</h5> </div> <div class="row"><img src="/images/productos/ADE-FARVET.png" class="img-fluid" /></div></div>'
		})
	})
</script>
@endsection