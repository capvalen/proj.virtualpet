@extends('panel.estructura')

@section('css')
<style>
#primeraColumna{
	min-height: 100vh;
	background: #fff;
}
#divCabecera{
	background-color: #ffc623;
	padding: 5rem;
}
#imgColumna{
		margin-top: -7rem!important;
	}
#tablaResultados .thead-dark th{
	background-color: #007bff;
		border-color: #006de2;
}
.petCodigo{	font-weight:700; }
#divDetalle .row .col, #divDetalle .row .col-12{
	margin-top:0.5rem;
}
</style>
@endsection

@section('title') Mascotas @endsection

@section('contenido')

<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-md-12 col-lg-2 px-0 " id="primeraColumna">
			{{-- Primer columna --}}
			<div id="divCabecera"></div>
			<div class="col d-flex justify-content-center pr-0">
				<center>
					<img src="images/sectionMascotas.png" id="imgColumna" class="img-fluid  px-5">
				</center>
			</div>
			<h4 class="text-center pt-3">Sección Mascotas</h4>
			
			<div class="text-center pt-3 px-2">
				<a class="btn btn-outline-success btn-block my-3" href="{{route('nuevo.registro')}}"><span class="icon-gitlab"></span> Nuevo paciente</a>

				<label class=""><i class="icofont-search"></i> <strong>Búsqueda personalizada</strong></label>
				<input type="search" class="form-control mt-2" placeholder="Nombre de la mascota" v-on:keyup.enter='busquedaActiva=true'>
				<input type="search" class="form-control mt-2" placeholder="DNI o Nombre del Propietario" v-on:keyup.enter='busquedaActiva=true'>
				<div class="form-group mt-2">
					<select id="sltEspecie" class="form-control selectpicker" title="Especie" data-live-search="true" data-width="100%">
						<option>Perro</option>
						<option>Gato</option>
						<option>Conejo</option>
						<option>Tortuga</option>
						<option>Pelícano</option>
					</select>
				</div>
				<div class="form-group mt-2">
					<select id="sltEspecie" class="form-control selectpicker" title="Raza" data-live-search="true" data-width="100%">
						<option>Doberman</option>
						<option>Pequines</option>
						<option>Pastor Alemán</option>
						<option>Poodle</option>
						<option>Pug</option>
						<option>Boxer</option>
					</select>
				</div>
				<input type="search" class="form-control mt-2" placeholder="Celular" v-on:keyup.enter='busquedaActiva=true'>
				<button class="btn btn-outline-warning btn-block mt-2" @click="busquedaActiva=true"><i class="icofont-search-1"></i> Filtrar</button>
			</div>

			
			{{-- Fin Primer columna --}}
		</div>


		<div class="col-12 col-md-12 col-lg-5 pt-2" id="divCuadroDefecto" v-if="!busquedaActiva">
			<div class="card mt-2">
				<div class="card-body">
					<h5><i style="font-size: 2rem" class="icofont-dog-alt"></i> Últimos pacientes registrados <span class="badge badge-secondary">5</span></h5>
					<div class="table-responsive mb-5 pb-5">
						<table class="table table-hover  tablaPortada " id="tablaDefecto">
							<thead class="thead-dark">
								<tr>
									<th scope="col">Código</th>
									<th scope="col">Mascota</th>
									<th scope="col">Propietario</th>
									<th scope="col">Edad</th>
									<th scope="col">Antigüedad</th>
									<th>@</th>
								</tr>
							</thead>
							<tbody>
								<tr onclick="window.location.replace('{{route('mascotas.perfil')}}')">
									<td class="text-capitalize petCodigo"><a class="text-decoration-none" href="#!">PET-16</a></td>
									<td class="text-capitalize tdSiguientePaso">Petita</td>
									<td class="text-capitalize">angoma inga</td>
									<td>5 meses</td>
									<td>hace 4 minutos</td>
									<td class="tdSiguientePaso"><i class="icofont-caret-right"></i></td>
								</tr>
								<tr onclick="window.location.replace('{{route('mascotas.perfil')}}')">
									<td class="text-capitalize petCodigo"><a class="text-decoration-none" href="#!">PET-8</a></td>
									<td class="text-capitalize tdSiguientePaso">Manchas</td>
									<td class="text-capitalize">Domingo salcedo</td>
									<td>1 año</td>
									<td>hace 1 hora</td>
									<td class="tdSiguientePaso"><i class="icofont-caret-right"></i></td>
								</tr>
								<tr onclick="window.location.replace('{{route('mascotas.perfil')}}')">
									<td class="text-capitalize petCodigo"><a class="text-decoration-none" href="#!">PET-15</a></td>
									<td class="text-capitalize tdSiguientePaso">Tamarindo</td>
									<td class="text-capitalize">mamani huertas</td>
									<td>1 año y 3 meses</td>
									<td>hace 1 hora</td>
									<td class="tdSiguientePaso"><i class="icofont-caret-right"></i></td>
								</tr>
								<tr onclick="window.location.replace('{{route('mascotas.perfil')}}')">
									<td class="text-capitalize petCodigo"><a class="text-decoration-none" href="#!">PET-36</a></td>
									<td class="text-capitalize tdSiguientePaso">Conejin</td>
									<td class="text-capitalize">Gonzales Portocarrero</td>
									<td>11 meses</td>
									<td>hace 1 hora</td>
									<td class="tdSiguientePaso"><i class="icofont-caret-right"></i></td>
								</tr>
								<tr onclick="window.location.replace('{{route('mascotas.perfil')}}')">
									<td class="text-capitalize petCodigo"><a class="text-decoration-none" href="#!">PET-25</a></td>
									<td class="text-capitalize tdSiguientePaso">Randy</td>
									<td class="text-capitalize">Domingo salcedo</td>
									<td>6 años</td>
									<td>hace 2 horas</td>
									<td class="tdSiguientePaso"><i class="icofont-caret-right"></i></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>	
		</div>



		<div class="col-12 col-md-12 col-lg-5 pt-2" id="divCuadroBusqueda" v-if="busquedaActiva">
			<div class="card mt-2">
				<div class="card-body">
					<h5 class="text-primary"><i class="icofont-dog-alt"></i> Resultados de la búsqueda <span class="badge badge-primary">3</span></h5>
					<div class="table-responsive mb-5 pb-5">
						<table class="table table-hover table-sm " id="tablaResultados">
							<thead class="thead-dark">
								<tr>
									<th scope="col">Código</th>
									<th scope="col">Mascota</th>
									<th scope="col">Propietario</th>
									<th scope="col">Especie</th>
									<th scope="col">Edad</th>
									<th scope="col">Antigüedad</th>
									<th scope="col">@</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="petCodigo"><a href="#!" class="text-decoration-none">PET-51</a></td>
									<td class="text-capitalize tdSiguientePaso">Manchas</td>
									<td class="text-capitalize">Wilmer galarza</td>
									<td class="text-capitalize">Gato</td>
									<td>6 meses</td>
									<td>hace 1 mes</td>
									<td class="tdSiguientePaso"><i class="icofont-caret-right"></i></td>
								</tr>
								<tr>
									<td class="petCodigo"><a href="#!" class="text-decoration-none">PET-34</a></td>
									<td class="text-capitalize tdSiguientePaso">Scooby</td>
									<td class="text-capitalize">Santiago Merlo</td>
									<td class="text-capitalize">Perro</td>
									<td>2 años y 3 meses</td>
									<td>hace 11 días</td>
									<td class="tdSiguientePaso"><i class="icofont-caret-right"></i></td>
								</tr>
								<tr>
									<td class="petCodigo"><a href="#!" class="text-decoration-none">PET-18</a></td>
									<td class="text-capitalize tdSiguientePaso">Pepito</td>
									<td class="text-capitalize">Canales Mejía</td>
									<td class="text-capitalize">Loro</td>
									<td>10 años</td>
									<td>hace 2 años</td>
									<td class="tdSiguientePaso"><i class="icofont-caret-right"></i></td>
								</tr>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>	
		</div>



		



	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalAddPaciente" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h5 class="modal-title" id="staticBackdropLabel"><span class="icon-gitlab"></span> Registro de paciente</h5>
				<div class="container-fluid">
					<label for="">Nombre del paciente</label>
					<input id="mascNombre" class="form-control" type="text" name="" v-model="mascNombre">
					
					<div class="row">
						<div class="col">
							<label for="">Días</label>
							<input class="form-control" type="number" value=0 v-model="vDias" min=0>
						</div>
						<div class="col">
							<label for="">Meses</label>
							<input class="form-control" type="number" value=0 v-model="vMeses" min=0>
						</div>
						<div class="col">
							<label for="">Años</label>
							<input class="form-control" type="number" value=0 v-model="vAnios" min=0>
						</div>
					</div>
					<div class="row row-cols-1 row-cols-md-2">
						<div class="col">
							<label for="">Edad <small class="text-muted"><span v-if="edad==''">(Auto calculado)</span> @{{edad}}</small></label>
							<input id="mascEdad" class="form-control" type="date" name="" value="2020-02-01" v-model="mascEdad">
						</div>
						<div class="col">
							<label for="">Sexo</label>
							<div class="form-group mb-0">
								<select id="sltMascSexo" class="form-control selectpicker" title="Sexo" data-live-search="true" data-width="100%" v-model="mascSexo">
									<option>Macho</option>
									<option>Hembra</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row row-cols-1 row-cols-md-2">
						<div class="col">
							<label for="">Especie</label>
							<div class="form-group mb-0">
								<select id="sltMascEspecie" class="form-control selectpicker" title="Especie" data-live-search="true" data-width="100%" v-model="mascEspecie">
									<option>Perro</option>
									<option>Gato</option>
									<option>Conejo</option>
									<option>Tortuga</option>
									<option>Pelícano</option>
									<option>Vacuno</option>
									<option>Camello</option>
								</select>
							</div>
						</div>

						<div class="col">
							<label for="">Raza</label>
							<div class="form-group mb-0">
								<select id="sltMascRaza" class="form-control selectpicker" title="Raza" data-live-search="true" data-width="100%" v-model="mascRaza">
									<option>Doberman</option>
									<option>Pequines</option>
									<option>Pastor Alemán</option>
									<option>Poodle</option>
									<option>Pug</option>
									<option>Boxer</option>
								</select>
							</div>
						</div>

					</div>
					<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mt-3">

						<div class="col">
							<div class="checkbox checkbox-warning">
								<input id="chkDesparasitado" type="checkbox" class="styled" @click="mascDesparasitado=!mascDesparasitado" :checked="mascDesparasitado">
								<label class="mt-0" for="chkDesparasitado">Desparasitado</label>
							</div>
						</div>
						<div class="col">
							<div class="checkbox checkbox-warning">
								<input id="chkReproductor" type="checkbox" class="styled" @click="mascReproductor=!mascReproductor" :checked="mascReproductor">
								<label class="mt-0" for="chkReproductor">Reproductor</label>
							</div>
						</div>
						<div class="col">
							<div class="checkbox checkbox-warning">
								<input id="chkCastrado" type="checkbox" class="styled" @click="mascCastrado=!mascCastrado" :checked="mascCastrado">
								<label class="mt-0" for="chkCastrado">Castrado</label>
							</div>
						</div>
						<div class="col">
							<div class="checkbox checkbox-warning">
								<input id="chkAdoptado" type="checkbox" class="styled" @click="mascAdoptado=!mascAdoptado" :checked="mascAdoptado">
								<label class="mt-0" for="chkAdoptado">Adoptado</label>
							</div>
						</div>

					</div>

					<div class="d-flex align-items-end flex-column">
						<button class="btn btn-outline-primary mt-3 ml-auto" data-dismiss="modal" data-toggle="modal" data-target="#modalRegistroPropietario"><span class="icon-gitlab"></span> Crear paciente</button>
					</div>

				
				</div>
			</div>
		 
		</div>
	</div>
</div>

<!-- Modal propietarios -->
<div class="modal fade" id="modalRegistroPropietario" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		 
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h5 class="modal-title" id="staticBackdropLabel"><i class="icofont-ui-user"></i> Registro de propietario</h5>

				<label for="">D.N.I.</label>
				<div class="input-group mb-3">
				<input type="text" class="form-control" id="propDNI" placeholder="D.N.I." aria-label="D.N.I." v-model="propDNI" >
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="button" id="button-addon2"><img src="{{asset('images/reniec.png')}}" class="img-fluid" style="max-width: 20px;"> Reniec</button>
					</div>
				</div>

				<label for="">Nombres</label>
				<input id="propNombre" class="form-control" type="text" name="" v-model="propNombres">
				<label for="">Apellidos</label>
				<input id="propApellidos" class="form-control" type="text" name="" v-model="propApellidos">
				<label for="">Celular</label>
				<input id="propCelular" class="form-control" type="text" name="" v-model="propCelular">
				<label for="">Dirección</label>
				<input id="propDireccion" class="form-control" type="text" name="" v-model="propDireccion">
				<label for="">Teléfono extra</label>
				<input id="propTelefono" class="form-control" type="text" name="" v-model="propTelefono">
					<div class="checkbox checkbox-warning pl-0 mt-2">
						<input id="chkCredito" type="checkbox" class="styled" v-model="propCredito" @click="propCredito=!propCredito">
						<label class="mt-0" for="chkCredito">¿Crédito?</label>
				</div>
				<label v-if="propCredito" for="">Límite de crédito</label>
				<input v-if="propCredito" id="propLimite" class="form-control" type="text" name="" v-model="propLimite">

				<div class="d-flex align-items-end flex-column">
					<button class="btn btn-outline-primary mt-3 ml-auto" data-dismiss="modal" data-toggle="modal" onclick="asociarDatos();"><i class="icofont-ui-user"></i> Asociar propietario</button>
				</div>
			</div>
		</div>
	</div>
</div>
<form action="{{route('mascotas.envioDatos')}}" type="POST" id="subidaDatos" >
@csrf</form>

@endsection

@section('script') 
<script>
var app = new Vue({
	el: '#app',
	data: {
		busquedaActiva:false,
		verDetalle:false,
		queIdCuadro:'', 
		mascNombre:'', mascEdad: '2020-02-01', mascSexo:'Sin especificar', mascEspecie:'Sin especificar', mascRaza:'Sin especificar', mascDesparasitado:false, mascReproductor:false, mascCastrado:false, mascAdoptado:false,
		propDNI:'', propNombres:'', propApellidos:'', propCelular:'', propDireccion:'', propTelefono:'',
		propCredito:false, propLimite:0,
		vDias:0,vMeses:0,vAnios:0
	},
	methods:{
		volverCuadro(){
			this.verDetalle=false;
			$( this.queIdCuadro ).removeClass('d-none');
			//animateCSS( this.queIdCuadro , 'fadeInLeft', function(){ });
		}
	},
	computed:{
		edad(){
			let cDias=0, cMeses =0, cAnios = 0; //65 dias = 65/30 = 2 meses y 5 días
			if( this.vDias<0 || this.vMeses<0 ||  this.vAnios<0 ){
				return '';
			}else if(this.vDias==0 && this.vMeses==0 &&  this.vAnios==0 ){
				return '';
			}
			else{
				if( this.vDias <= 29 ){ cDias = parseInt(this.vDias); }
				if( this.vDias > 29 ){ cDias += parseInt(this.vDias%30); cMeses=  Math.round( this.vDias/30 ,0); }
				if( this.vMeses > 0 && this.vMeses<12 ){ cMeses+=parseInt(this.vMeses); }
				if( this.vMeses >= 12 ){ cMeses+=parseInt(this.vMeses%12); cAnios+= Math.round( this.vMeses/12 ,0); }//37 meses = 3años y 1 mes
				cAnios+= parseInt(this.vAnios);
				
				let hoy = moment();
				hoy = hoy.subtract( cDias, 'days' );
				hoy = hoy.subtract( cMeses, 'months' );
				hoy = hoy.subtract( cAnios, 'years' );
				$('#mascEdad').val( hoy.format('YYYY-MM-DD') );
				
				return `(${cDias} días, ${cMeses} meses y ${cAnios} años)`;
			}
		}
		
	}
	
});
$(document).ready(function(){
	$('#primeraColumna .selectpicker').selectpicker('val', -1);
	$('#app').on('click', '.tdSiguientePaso', function(){ console.log( 'click' );
		let procedencia= $(this).parent().parent().parent();
		
		/* if( $(procedencia).attr('id') == 'tablaDefecto'){
			$('#divCuadroDefecto').addClass('d-none');
				app.queIdCuadro = '#divCuadroDefecto';
				app.verDetalle=true;
			//animateCSS('#divCuadroDefecto', 'fadeOutLeft', function(){ });
		} */

		if( $(procedencia).attr('id') == 'tablaResultados'){
			$('#divCuadroBusqueda').addClass('d-none');
			app.queIdCuadro = '#divCuadroBusqueda';
			app.verDetalle=true;
			//animateCSS('#divCuadroBusqueda', 'fadeOutLeft', function(){ });
		}
	});

	
})



function animateCSS(element, animationName, callback) {
		const node = document.querySelector(element)
		node.classList.add('animated', animationName)

		function handleAnimationEnd() {
				node.classList.remove('animated', animationName)
				node.removeEventListener('animationend', handleAnimationEnd)

				if (typeof callback === 'function') callback()
		}

		node.addEventListener('animationend', handleAnimationEnd)
}

$('#app').on('change','#sltMascSexo',function() { app.mascSexo = $('#sltMascSexo').val(); });
$('#app').on('change','#sltMascEspecie',function() { app.mascEspecie = $('#sltMascEspecie').val(); });
$('#app').on('change','#sltMascRaza',function() { app.mascRaza = $('#sltMascRaza').val(); });


function asociarDatos(){
	let valores = {'mascota':[], 'propietario':[]};
	valores.mascota.push({
		nombre: app.mascNombre, edad: app.mascEdad, sexo: app.mascSexo, especie: app.mascEspecie, raza: app.mascRaza, desparasitado: app.mascDesparasitado, reproductor: app.mascReproductor, castrado: app.mascCastrado, adoptado: app.mascAdoptado
	});
	valores.propietario.push({
		dni: app.propDNI, nombres: app.propNombres, apellidos: app.propApellidos, celular: app.propCelular, direccion: app.propDireccion, telefono: app.propTelefono
	});
	console.log( valores );

	/* var request = new XMLHttpRequest(),	token = document.querySelector('meta[name="csrf-token"]').content;
	request.open('POST', "{{route('mascotas.envioDatos')}}", true);
	request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
	request.setRequestHeader('X-CSRF-TOKEN', token);
	request.send(JSON.stringify(valores)); */

	$.post('{{route('mascotas.envioDatos')}}', {
		'_token': document.querySelector('meta[name="csrf-token"]').content,
		valores: valores

	}, function(respuesta){
		console.log( respuesta );
	})

}

</script>
{{-- 
Color y descripción para 
estrellas
Rojo-> aleta
plomo nuevo
amarillo good --}}
@endsection

