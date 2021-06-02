@extends('panel.estructura')
@section('css')
<style>
	#divPerfilMascota label, #divExamenesGenerales label{
		font-size: 0.9em!important;
		margin-bottom: 0!important;
	}
	#divPerfilMascota p, #divExamenesGenerales p{
		margin-bottom: 1em;
		font-size:1.2em;
		font-weight: 500;
	}
	#divHistoriaDetalles label{
		font-weight: 500;
		font-size:1.1em;
		margin: .5rem 0;

	}
	#divHistoriaDetalles p{
		margin: .5rem 5px;
		font-size:1.1em;
	}
	
.todo-list-wrapper .todo-indicator {
    position: absolute;
    width: 4px;
    height: 60%;
    border-radius: .4rem;
    left: .625rem;
    top: 20%;
    opacity: .6;
    transition: opacity .2s;
}

.widget-content .widget-content-wrapper {
    display: flex;
    flex: 1;
    position: relative;
    align-items: center;
		padding: 0 1rem ;
}
.bg-warning {
    background-color: #f5b32d!important;
}
#divUltimasDosis p{
	margin-bottom: 0;
	line-height: 1px;
}
.cbp_tmtimeline p{
	font-size: 1rem; font-weight: 400;
	margin-bottom: 0;
}
.cbp_tmtimeline>li .cbp_tmlabel p{
	color: #313131;
}
.responsables{
	color: #777777!important;
}
#divExamenesGenerales label{
	font-weight: 400;
}
.cbp_tmlabel {
	cursor: pointer;
}
</style>
@endsection

@section('title') Mascotas @endsection

@section('contenido')
<div class="container-fluid" id="app">
	
	<div class="col-lg-10 mx-auto">
	
		<div id="divPerfilMascota">
			<h2 class="my-3"><i class="icofont-paw"></i> Perfil del Paciente</h2>
			<div class="card">
				<div class="card-body">
					<div class="row ">
			
						<div class="col">
							<h4 class="text-center">LUCKY</h4>
							<img src="{{asset('images/mascotas_perfil/1.jpg')}}" class="img-fluid" alt="">
						</div>
						<div class="col">
							<h4 style="font-weight: 400"><i style="font-size: 2rem" class="icofont-heartbeat"></i> Información General</h4>
							<div class="row">
								<div class="col">
									<label for="">Código</label>
									<p><a class="text-decoration-none" href="{{route('mascotas.perfil', 'PET-52')}}}">PET-35</a></p>
								</div>
								<div class="col">
									<label for="">N° Microchip:</label>
									<p>MIF-004220</p>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<label for="">Cumpleaños <small>en 12 días</small></label>
									<p>22/6/2020</p>
								</div>
								<div class="col">
									<label for="">Edad</label>
									<p>1 año y 10 días</p>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<label for="">Especie</label>
									<p>Canino</p>
								</div>
								<div class="col">
									<label for="">Raza</label>
									<p>Cocker</p>
								</div>
								<div class="col">
									<label for="">Color</label>
									<p>Negro </p>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<label for="">Peso</label>
									<p>15.8 Kg</p>
								</div>
								<div class="col">
									<label for="">Sexo</label>
									<p>Macho <span class="icon-male"></span></p>
								</div>
								<div class="col">
									<label for="">Castrado</label>
									<p><i class="icofont-close"></i> No</p>
								</div>
			
							</div>
							<div class="row">
								<div class="col">
									<label for="">Reproductor</label>
									<p><i class="icofont-check"></i> Si</p>
								</div>
								<div class="col">
									<label for="">Adoptado</label>
									<p><i class="icofont-close"></i> No</p>
								</div>
								<div class="col">
									<label for="">Desparasitado</label>
									<p><i class="icofont-check"></i> Si</p>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<label for="">Señas particulares</label>
										<p><i class="icofont-check"></i> Si</p>
								</div>
							</div>
			
						</div>
						<div class="col">
							<h4 style="font-weight: 400"><i class="icofont-user-alt-1"></i> Propietario</h4>
							<div class="row">
								<div class="col-md-3">
									<label for="">D.N.I.</label>
									<p><a class="text-decoration-none" href="#!">44475064</a></p>
								</div>
								<div class="col">
									<label for="">Nombres.</label>
									<p><a class="text-decoration-none" href="#!">Pariona Valencia, Carlos Alex</a></p>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<label for="">Cumpleaños <small>en 3 meses</small></label>
									<p>22/8/2020</p>
								</div>
								<div class="col">
									<label for="">Edad</label>
									<p>41 años</p>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<label for="">Celular</label>
									<p>977692108</p>
								</div>
			
			
							</div>
							<div class="row">
								<div class="col">
									<label for="">Dirección</label>
									<p>Av. Huancavelica 435 - El Tambo - Huancayo</p>
								</div>
			
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="row mt-4" v-if="!hayHistoria">
			<div class="col col-md-5">
				<div class="card">
					<div class="card-body">
						<p>Última:</p>
						<div class="row row-cols-3 px-3" id="divUltimasDosis">
							<div><p>Desparasitación</p> <br><span>Nunca</span></div>
							<div><p>Vacuna</p> <br><span>hace 1 mes <br> <small>21/04/2021</small></span></div>
							<div><p>Antipulgas</p> <br><span>Nunca</span></div>
						</div>
					</div>
				</div>

				<div class="card mt-3">
					<div class="card-body">
						<div class="row row-cols-1 row-cols-md-3">
							<div class="col">
								<label for="">Registrado el</label>
								<p>11/03/2020 5:41 pm</p>
							</div>
							<div class="col">
								<label for="">Registrador</label>
								<p><a href="#!">Antonio B.</a></p>
							</div>
							<div class="col">
								<button class="btn btn-outline-primary btn-lg"><i class="icofont-plus"></i> Nota nueva</button>
							</div>
						</div>
					</div>
				</div>
				<div class="card mt-3">
					<div class="card-body">
						
						<h5><i style="font-size:1.5rem;" class="icofont-newspaper"></i>  Notas:</h5>
						<ul class="todo-list-wrapper list-group list-group-flush">
							<li class="list-group-item">
								<div class="todo-indicator bg-warning"></div>
								<div class="widget-content ">
									<div class="widget-content-wrapper">	
										<div class="col">
											<div>Requiere intervención quirúrgica <div class="badge badge-success ml-2"> Urgente </div> </div>
											<div class="widget-subheading"><i>Escrito por: Manuel Santiago López</i></div>
											<div class="text-muted"><i class="icofont-clock-time"></i> <small>12/15/2021 2:31 am</small></div>
										</div>
										<div class="col-auto">
											<div>
												<a href="#!" class="text-muted text-decoration-none mx-1" style="font-size: 1.2rem"><i class="icofont-brush"></i></a>
												<a href="#!" class="text-muted text-decoration-none mx-1" style="font-size: 1.2rem"><i class="icofont-trash"></i></a>
											</div>
										</div>
									</div>
								</div>
							</li>
							
							</li>
							
						</ul>	
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<div class="card-body">
						<h5><i style="font-size:1.5rem;" class="icofont-newspaper"></i>  Historial del paciente </h5>
						<div class="d-flex justify-content-end my-3">
							<a href="{{route('nueva.visita')}}" class="btn btn-outline-secondary btn-lg"><i class="icofont-brand-walmart"></i> Registrar visita</a>
						</div>
						
						<ul class="cbp_tmtimeline">
							<li>
									<time class="cbp_tmtime" datetime="2017-11-04T18:30"><span class="hidden">31/05/2021</span> <span class="large">Hoy</span></time>
									<div class="cbp_tmicon bg-orange"><i class="icofont-ui-folder"></i></div>
									<div class="cbp_tmlabel empty" @click="verHistoria(1);">
										<p>Visita médica: <strong>«Malestar general»</strong>. </p> <p class="responsables"><small>Responsable: Dr. Edwin Domingo</small></p>
									</div>
							</li>
							<li>
									<time class="cbp_tmtime" datetime="2017-11-04T18:30"><span class="hidden">25/05/2021</span> <span class="large">Hace 2 días</span></time>
									<div class="cbp_tmicon bg-secondary"><i class="icofont-ui-tag"></i></div>
									<div class="cbp_tmlabel empty" @click="verHistoria(1);">
										<p>Visita por servicio: <strong>«Baño»</strong>. </p> <p class="responsables"><small>Responsable: Lic. Manuela Ramos</small></p>
									</div>
							</li>
							<li>
								<time class="cbp_tmtime" datetime="2017-11-04T18:30"><span class="hidden">31/05/2021</span> <span class="large">Hoy</span></time>
								<div class="cbp_tmicon bg-orange"><i class="icofont-ui-folder"></i></div>
								<div class="cbp_tmlabel empty" @click="verHistoria(1);">
									<p>Visita médica: <strong>«Esterilización»</strong>. </p> <p class="responsables"><small>Responsable: Dr. Jim Quiñones</small></p>
								</div>
							</li>
							</ul>
						
					</div>
				</div>
			</div>
		</div>

		<div class="row my-4" v-if="hayHistoria" id="divHistoriaDetalles" >
			<div class="col">
				<h2 class="my-3"><i class="icofont-fox"></i> Historia Clínica <small>#2211 <a href="#!" @click="hayHistoria=false;" style="font-size: 60%;" class="text-decoration-none"><i class="icofont-rounded-up"></i> Regresar a la anterior vista</a></small></h2>
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<div class="form-inline"> <label for="">Fecha: </label> <p>11/05/2021</p> </div>
								<div class="form-inline"> <label for="">Motivo de la consulta: </label> <p>Malestar general</p> </div>
								<h5 class="my-4">Exámenes generales </h5>
								<div class="form-inline"> <label for="">Diagnósticos Clínicos: </label> <p>Vómitos por 3 días, heces sueltas.</p> </div>
								<div class="row row-cols-4" id="divExamenesGenerales">
									<div class="col">
										<label for="">Peso</label>
										<p>12.50 kg.</p>
									</div>
									<div class="col">
										<label for="">Temperatura</label>
										<p>36.8 °C.</p>
									</div>
									<div class="col">
										<label for="">Estado Gral.</label>
										<p>Normal</p>
									</div>
									<div class="col">
										<label for="">Conciencia</label>
										<p>Deprimido</p>
									</div>
									<div class="col">
										<label for="">Mucosas</label>
										<p>Icnericas</p>
									</div>
									<div class="col">
										<label for="">Apetito</label>
										<p>Disminuido</p>
									</div>
									<div class="col">
										<label for="">Hidratación</label>
										<p>Leve</p>
									</div>
									<div class="col">
										<label for="">Respiración</label>
										<p>Disnea</p>
									</div>
									<div class="col">
										<label for="">Corazón</label>
										<p>Normal</p>
									</div>
									<div class="col">
										<label for="">Ganglios</label>
										<p>Normal</p>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="form-inline"> <label for="">Análisis de laboratorio: </label> <p>Si. Ecografía</p> </div>
								<div class="form-inline"> <label for="">Diagnóstico por imágenes: </label> <p>-</p> </div>
								<div class="form-inline"> <label for="">Ecografía: </label> <p>-</p> </div>
								<div class="form-inline"> <label for="">Ecocardiografía: </label> <p>-</p> </div>
								<div class="form-inline"> <label for="">Diagnóstico presuntivo: </label> <p>-</p> </div>
								<div class="form-inline"> <label for="">Tratamiento: </label> </div>
								<div class="">
									<ul>
										<li>Polielectrónico  100ml (antes con el Dr. Cardenas)</li>
										<li>Raditinina</li>
										<li>Baytril</li>
										<li>Diactaencasa</li>
									</ul>
								</div>
								<div class="form-inline"> <label for="">¿Proxima cita programada?: </label> <p>Si. El jueves, 3 de junio de 2021</p> </div>

								
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
</div>
@endsection
@section('script')
<script>
var app = new Vue({
  el: '#app',
  data: {
    hayHistoria: false
  },
	methods:{
		verHistoria( idHisto ){
			this.hayHistoria=true;
		}
	}
})
</script>
@endsection