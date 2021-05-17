@extends('panel.estructura')

@section('css')
<style>
	.form-control{margin-bottom: 1rem;}
	.cbp_tmtimeline {
    margin: 0;
    padding: 0;
    list-style: none;
    position: relative
}

.cbp_tmtimeline:before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    width: 3px;
    background: #eee;
    left: 20%;
    margin-left: -6px
}

.cbp_tmtimeline>li {
    position: relative
}

.cbp_tmtimeline>li:first-child .cbp_tmtime span.large {
    color: #444;
    font-size: 17px !important;
    font-weight: 700
}

.cbp_tmtimeline>li:first-child .cbp_tmicon {
    background: #fff;
    color: #666
}

.cbp_tmtimeline>li:nth-child(odd) .cbp_tmtime span:last-child {
    color: #444;
    font-size: 13px
}

.cbp_tmtimeline>li:nth-child(odd) .cbp_tmlabel {
    background: #f0f1f3
}

.cbp_tmtimeline>li:nth-child(odd) .cbp_tmlabel:after {
    border-right-color: #f0f1f3
}

.cbp_tmtimeline>li .empty span {
    color: #777
}

.cbp_tmtimeline>li .cbp_tmtime {
    display: block;
    width: 23%;
    padding-right: 70px;
    position: absolute
}

.cbp_tmtimeline>li .cbp_tmtime span {
    display: block;
    text-align: right
}

.cbp_tmtimeline>li .cbp_tmtime span:first-child {
    font-size: 15px;
    color: #3d4c5a;
    font-weight: 700
}

.cbp_tmtimeline>li .cbp_tmtime span:last-child {
    font-size: 14px;
    color: #444
}

.cbp_tmtimeline>li .cbp_tmlabel {
    margin: 0 0 15px 25%;
    background: #f0f1f3;
    padding: 1.2em;
    position: relative;
    border-radius: 5px
}

.cbp_tmtimeline>li .cbp_tmlabel:after {
    right: 100%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-right-color: #f0f1f3;
    border-width: 10px;
    top: 10px
}

.cbp_tmtimeline>li .cbp_tmlabel blockquote {
    font-size: 16px
}

.cbp_tmtimeline>li .cbp_tmlabel .map-checkin {
    border: 5px solid rgba(235, 235, 235, 0.2);
    -moz-box-shadow: 0px 0px 0px 1px #ebebeb;
    -webkit-box-shadow: 0px 0px 0px 1px #ebebeb;
    box-shadow: 0px 0px 0px 1px #ebebeb;
    background: #fff !important
}

.cbp_tmtimeline>li .cbp_tmlabel h2 {
    margin: 0px;
    padding: 0 0 10px 0;
    line-height: 26px;
    font-size: 16px;
    font-weight: normal
}

.cbp_tmtimeline>li .cbp_tmlabel h2 a {
    font-size: 15px
}

.cbp_tmtimeline>li .cbp_tmlabel h2 a:hover {
    text-decoration: none
}

.cbp_tmtimeline>li .cbp_tmlabel h2 span {
    font-size: 15px
}

.cbp_tmtimeline>li .cbp_tmlabel p {
    color: #444
}

.cbp_tmtimeline>li .cbp_tmicon {
    width: 40px;
    height: 40px;
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    font-size: 1em;
    line-height: 40px;
    -webkit-font-smoothing: antialiased;
    position: absolute;
    color: #fff;
    background: #46a4da;
    border-radius: 50%;
    box-shadow: 0 0 0 5px #f5f5f6;
    text-align: center;
    left: 20%;
    top: 0;
    margin: 0 0 0 -25px
}
.cbp_tmicon i{
	color: #fff!important;
}

@media screen and (max-width: 992px) and (min-width: 768px) {
    .cbp_tmtimeline>li .cbp_tmtime {
        padding-right: 60px
    }
}

@media screen and (max-width: 65.375em) {
    .cbp_tmtimeline>li .cbp_tmtime span:last-child {
        font-size: 12px
    }
}

@media screen and (max-width: 47.2em) {
    .cbp_tmtimeline:before {
        display: none
    }
    .cbp_tmtimeline>li .cbp_tmtime {
        width: 100%;
        position: relative;
        padding: 0 0 20px 0
    }
    .cbp_tmtimeline>li .cbp_tmtime span {
        text-align: left
    }
    .cbp_tmtimeline>li .cbp_tmlabel {
        margin: 0 0 30px 0;
        padding: 1em;
        font-weight: 400;
        font-size: 95%
    }
    .cbp_tmtimeline>li .cbp_tmlabel:after {
        right: auto;
        left: 20px;
        border-right-color: transparent;
        border-bottom-color: #f5f5f6;
        top: -20px
    }
    .cbp_tmtimeline>li .cbp_tmicon {
        position: relative;
        float: right;
        left: auto;
        margin: -64px 5px 0 0px
    }
    .cbp_tmtimeline>li:nth-child(odd) .cbp_tmlabel:after {
        border-right-color: transparent;
        border-bottom-color: #f5f5f6
    }
}

.bg-green {
    background-color: #50d38a !important;
    color: #fff;
}

.bg-blush {
    background-color: #ff758e !important;
    color: #fff;
}

.bg-orange {
    background-color: #f8b832  !important;
    color: #fff;
}

.bg-info {
    background-color: #2CA8FF !important;
}
.bg-default {
    background-color: #848484 !important;
}
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
