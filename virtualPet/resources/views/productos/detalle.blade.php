@extends('panel.estructura')

@section('css')
<style>
	.form-control{margin-bottom: 1rem;}
</style>
@endsection

@section('title') Detalle de producto @endsection

@section('contenido')
<div class="container-fluid mt-4" id="app">
	<h2>Detalle de producto <small>LABHIDRO AD3E INYECTABLE</small></h2>
	<div class="row">
		<div class="col-auto">
			<p class="mb-0"><a href="#!"><i class="icofont-camera"></i> Nueva foto</a></p>
			<img src="{{url('/images/productos/ADE-FARVET.png')}}" alt="" class="img-fluid">
		</div>
		<div class="col">
			<button class="btn btn-outline-secondary mb-3 ml-auto"><i class="icofont-brush"></i> Activar edición</button>
			<div class="form-group">
				<select id="sltTipoProducto" class="form-control" disabled="disabled">
					<option value="-">Fármaco</option>
					<option value="-">Servicio</option>
					<option value="-">Jarabe</option>
					<option value="5" selected="selected">Inyectable</option>
					<option value="-">Antipulgas</option>
					<option value="-">Crema</option>
					<option value="-">Antiparasitario</option>
					<option value="-">Vacuna</option>
					<option value="-">Pastilla</option>
					<option value="-">Juguete</option>
					<option value="-">Shampoo</option>
					<option value="-">Antibióticos</option>
					<option value="-">Antiinflamatorios</option>
					<option value="-">Protectores hepaticos</option>
					<option value="-">Protectores gástricos</option>
				</select>
			</div>
			<label for="">Nombre:</label>
			<input class="form-control" type="text" placeholder="Nombre " value="LABHIDRO AD3E INYECTABLE" readonly>
			<label for="">Precio de compra:</label>
			<input class="form-control" type="number" placeholder="Precio" value="10.00" readonly>
			<label for="">Porcentaje de ganancia (%):</label>
			<input class="form-control" type="number" placeholder="Precio" value="30" readonly>
			<label for="">Precio de venta:</label>
			<input class="form-control" type="number" placeholder="Precio" value="12.50" readonly>
			<label for="">Stock actual:</label>
			<input class="form-control" type="number" placeholder="Stock inicial" value="56" readonly>
			<label for="">Distribuidor:</label>
			<input class="form-control" type="text" placeholder="Distribuidor" value="Intradevco" readonly>
			<label for="">Notas extras:</label>
			<textarea name="" id="" cols="30" rows="3" class="form-control" readonly>Esta por vencer 1 unidad en julio del 2021, priorizar su venta</textarea>
		</div>
		<div class="col">
			<h5 class="mb-1">Componentes:</h5>
			<p class="mb-0">Cada ml contiene:</p>
			<p class="mb-0">	Sustancias activas:</p>
			<ul>
				<li>Vitamina A (propionato de retinol) 500.000 UI</li>
				<li>Colecalciferol (vitamina D3) 75.000 UI</li>
				<li>Acetato de todo-rac-α-tocoferilo (vitamina E) 50 mg</li>
				<li>Excipientes:</li>
				<li>Alcohol bencílico (E 1519) 25 mg</li>
				<li>Todo-rac-α tocoferol (E 307) 0,5 mg</li>
			</ul>

			<h5 class="mb-5">Historial de cambios:</h5>
			<div class="mt-5">
				<ul class="cbp_tmtimeline">
					<li>
							<time class="cbp_tmtime" datetime="2017-11-04T18:30"><span class="hidden">25/12/2017</span> <span class="large">Ahora</span></time>
							<div class="cbp_tmicon bg-orange"><i class="icofont-ui-reply"></i></div>
							<div class="cbp_tmlabel empty"> <p>Nota eliminada: <strong>«Esta por vencer 2 unidades en julio del 2021, priorizar su venta»</strong>. Responsable: Sistema</p></div>
					</li>
					<li>
							<time class="cbp_tmtime" datetime="2017-11-04T18:30"><span class="hidden">25/12/2017</span> <span class="large">Ahora</span></time>
							<div class="cbp_tmicon bg-orange"><i class="icofont-ui-reply"></i></div>
							<div class="cbp_tmlabel empty"> <p>Precio cambio: <strong>S/ 52.10</strong>. Responsable: Sistema</p></div>
					</li>
					<li>
							<time class="cbp_tmtime" datetime="2017-11-04T03:45"><span>08:45 am</span> <span>Hoy</span></time>
							<div class="cbp_tmicon bg-default"><i class="icofont-ui-rate-blank"></i></div>
							<div class="cbp_tmlabel">
									<p>Producto registrado. Responsable: Sistema</p>
							</div>
					</li>
					</ul>
			</div>
		</div>
	</div>
</div>
@endsection
