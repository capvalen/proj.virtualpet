@extends('panel.estructura')

@section('css')
<style>
	label{
		font-size: .9em;
	}
</style>
@endsection

@section('title') Nueva visita @endsection

@section('contenido')

<div class="container-fluid" id="app">


<div class="row">
	<div class="col-lg-8 mx-auto mt-4">
		<h3>Nueva Visita</h3>
			<div class="form-inline">
				<div>Primero ubique el cliente y/o el paciente <button class="btn btn-outline-primary"><i class="icofont-search-1"></i> Filtrar</a></div>
				</div>
		
		
		
		<h3>Tipo de Visita</h3>
		<div class="row">
			<div class="form-group col-6">
				<label for="my-select">Seleccione el tipo de visita</label>
				<select id="my-select" class="form-control" name="" @change="cambioTipo()" v-model="tipo">
					<option value="baño">Baño y/o Corte</option>
					<option value="simple">Consulta</option>
					<option value="completa">Historia clínica completa</option>
					<option value="orden">Orden de análisis clínico</option>
				</select>
			</div>
		</div>
		
		<div class="card-deck mb-5">
			<div class="card ">
				<div class="card-body">
					<div class="container-fluid">
						<div v-if="tipo=='baño'">
							<h5><i style="font-size: 2em;" class="icofont-bathtub"></i> Registro de Baño o Corte</h5>
							<label for="">Estado inicial</label>
							<input class="form-control" type="text" name="" value="Vino con pulgas">
							<label for="">Tratamiento realizado</label>
							<textarea  class="form-control" rows="3" v-model="contenido" id="default"></textarea>
							
						</div>
						<div v-if="tipo=='simple'">
							<h5><i style="font-size: 2em;" class="icofont-heartbeat"></i> Consulta común</h5>
							<label for="">Motivo de consulta</label>
							<textarea class="form-control" type="text" rows="2" name="" value=""></textarea>
							<label for="">Examen clínico general</label>
							<textarea class="form-control" type="text" rows="2" name="" value=""></textarea>
							<label for="">Descripción general</label>
							<textarea class="form-control" type="text" rows="2" name="" value=""></textarea>
							<label for="">Análisis solicitados</label>
							<textarea class="form-control" type="text" rows="2" name="" value=""></textarea>
							<label for="">Análisis rechazados</label>
							<textarea class="form-control" type="text" rows="2" name="" value=""></textarea>
							<label for="">Diagnóstico final</label>
							<textarea class="form-control" type="text" rows="2" name="" value=""></textarea>
						</div>
						<div v-if="tipo=='completa'">
							<h5><i style="font-size: 2em;" class="icofont-heartbeat"></i> Visita médica con Historia Clínica</h5>
							<label for="">Motivo de la consulta:</label>
							<textarea class="form-control" type="text" rows="2" name="" value=""></textarea>
							<label for="">Diagnósticos Clínicos:</label>
							<textarea class="form-control" type="text" rows="2" name="" value=""></textarea>
							<div class="row row-cols-2">
								
								<div class="col">
									<label for="">Peso (kg)</label>
									<input class="form-control" type="number">
								</div>
								<div class="col">
									<label for="">Temperatura (°C)</label>
									<input class="form-control" type="number">
								</div>
								<div class="col">
									<label for="">Estado General</label>
									<select id="" class="form-control" name="">
										<option>Normal</option>
										<option>Regular</option>
										<option>Malo</option>
									</select>
								</div>
								<div class="col">
									<label for="">Conciencia</label>
									<select id="" class="form-control" name="">
										<option>Alerta</option>
										<option>Deprimido</option>
										<option>Estuporoso</option>
										<option>Comatoso</option>
									</select>
								</div>
								<div class="col">
									<label for="">Mucosas</label>
									<select id="" class="form-control" name="">
										<option>Normales</option>
										<option>Pálidas</option>
										<option>Congresivas</option>
										<option>Cianóticas</option>
										<option>Ictéricas</option>
									</select>
								</div>
								<div class="col">
									<label for="">Apetito</label>
									<select id="" class="form-control" name="">
										<option>Normal</option>
										<option>Disminuido</option>
										<option>Polifagia</option>
										<option>Anorexia</option>
									</select>
								</div>
								<div class="col">
									<label for="">Hidratación</label>
									<select id="" class="form-control" name="">
										<option>Normal</option>
										<option>Leve</option>
										<option>Moderada</option>
										<option>Grave</option>
									</select>
								</div>
								<div class="col">
									<label for="">Respiración</label>
									<select id="" class="form-control" name="">
										<option>Normal</option>
										<option>Disnea</option>
										<option>Otro</option>
									</select>
								</div>
								<div class="col">
									<label for="">Corazón</label>
									<select id="" class="form-control" name="">
										<option>Normal</option>
										<option>Otro</option>
									</select>
								</div>
								<div class="col">
									<label for="">Ganglios</label>
									<select id="" class="form-control" name="">
										<option>Normal</option>
										<option>Otro</option>
									</select>
								</div>
							</div>
							<label for="">Diagnóstico presuntivo</label>
							<textarea class="form-control" type="text" rows="2" name="" value=""></textarea>
						</div>

						<div v-if="tipo=='orden'">
							<h5><i style="font-size: 2em;" class="icofont-heartbeat"></i> Orden de análisis clínico</h5>
							<label for="">Perfil de análisis</label>
							<select id="" class="form-control" name="">
								<option>Ecografía</option>
								<option>Radiografía</option>
								<option>Radiografía</option>
								<option>Hemograma</option>
								<option>Anticuerpos</option>
							</select>
							<label for="">Detalle del servicio</label>
							<textarea class="form-control" type="text" rows="2" name="" value=""></textarea>
							
						</div>


					</div>
				</div>
			</div>
		

			

		

			<div class="card">
				<div class="card-body">
					<div v-if="tipo=='completa'">
						<label for="">Análisis de laboratorio</label>
						<textarea class="form-control" type="text" rows="2" name="" value=""></textarea>
						<label for="">Diagnóstico por imágenes</label>
						<textarea class="form-control" type="text" rows="2" name="" value=""></textarea>
						<label for="">Ecografía</label>
						<textarea class="form-control" type="text" rows="2" name="" value=""></textarea>
						<label for="">Ecocardiografía</label>
						<textarea class="form-control" type="text" rows="2" name="" value=""></textarea>
						<label for="">Tratamiento</label>
						<textarea class="form-control" type="text" rows="2" name="" value=""></textarea>
						
						
					</div>

					<div class="form-check abc-checkbox abc-checkbox-warning py-3">
						<input id="checkbox2" class="styled" type="checkbox" class="form-check-input" @change="proximaCita=!proximaCita" :checked="proximaCita">
						<label class="form-check-label" for="checkbox2">¿Programar próxima cita? <strong><span v-if="!proximaCita">No</span><span v-else>Sí</span></strong></label>
					</div>
					<input type="text" class="form-control" id="txtProximaCita" v-if="proximaCita" value="">

					
					<h4>Adjunte evidencias</h4>
					<input type="file" id="filUp"
					class="filepond"
					name="filepond"
					multiple
					data-allow-reorder="true"
					data-max-file-size="3MB"
					data-max-files="3">
					<button class="btn btn-outline-secondary btn-block btn-lg mt-3" @click="registrar()"><i class="icofont-save"></i> Registrar</button>

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
	el: "#app",
	data:{
		tipo: 'completa',
		contenido: '',
		proximaCita:false
	},
	methods:{
		cambioTipo(){
			switch (this.tipo) {
				case 'baño':
					break;
			
				default:
				

					break;
			}
		

		},
		registrar(){
			this.contenido = tinymce.get("default").getContent();
			console.log( this.contenido );


		}
	}
});

FilePond.registerPlugin(FilePondPluginImagePreview);
FilePond.setOptions({
  labelIdle: 'Suelte sus archivos aquí o <span class="filepond--label-action"> Búsquelos </span>'
});

FilePond.create(
	document.querySelector('#filUp'));

$('#app').on('focus', '#txtProximaCita', function(){ $('#txtProximaCita').bootstrapMaterialDatePicker({ weekStart : 0, lang:'es', nowButton:false, cancelText: 'Cancelar', nowText: 'Hoy', switchOnClick:true, time: false }); });

</script>
@endsection
