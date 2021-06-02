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
					<option value="completa">Visita médica completa</option>
					<option value="baño">Baño y/o Corte</option>
					<option>Consulta</option>
					<option>Orden de análisis clínico</option>
					<option>Orden de ecografía</option>
					<option>Orden de cirugía</option>
				</select>
			</div>
		</div>
		
		<div class="card ">
			<div class="card-body">

				<div v-if="tipo=='baño'">
					<h5><i style="font-size: 2em;" class="icofont-bathtub"></i> Registro de Baño o Corte</h5>
					<label for="">Estado inicial</label>
					<input class="form-control" type="text" name="" value="Vino con pulgas">
					<label for="">Tratamiento realizado</label>
					
					<textarea v-model="contenido" id="default"></textarea>

					<button class="btn btn-outline-secondary" @click="registrar()">Registrar</button>
				</div>

			</div>
		</div>
		
	</div>
</div>
</div>

@endsection

@section('script')
<script src="https://cdn.tiny.cloud/1/7a0cmyafpc7z2m7m9l1td1c9nrhdcyaftkvzcsalye6m2ixa/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="{{url('js/tinymce_es.js')}}"></script>

<script>
/* tinymce.init({
  selector: 'textarea#default'
}); */

tinymce.init({
  selector: 'textarea',
  menubar: false,
	toolbar: 'undo redo | bold italic underline numlist bullist',
	plugins: 'lists',
	text: 'HOLA MUNDO',
	language: 'es_419',
	statusbar: false

});

var app = new Vue({
	el: "#app",
	data:{
		tipo: 'baño',
		contenido: 'Hola mundo'
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
})
</script>
@endsection
