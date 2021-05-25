@extends('panel.estructura')

@section('css')
<style>
	#primerDiv .form-control, #primerDiv .input-group-append{
		margin: 0.5rem 0;
	}
	.custom-control-input:checked~.custom-control-label::before {
    color: #fff;
    border-color: #f1ab19;
    background-color: #f7b730;
	}
	.custom-control-label::before{
		width: 1.2rem;
    height: 1.2rem;
	}
	.custom-control-label::after{
    top: .22rem;
    width: 1.2rem;
    height: 1.2rem;
	}
	.custom-control-label:focus{
		border-color: #ce1919;
		box-shadow: 0 0 0 0.2rem rgb(66 253 44 / 25%);
	}
	.btn i{
		font-size: 1.4rem;
	}
	#imgCliente{
		max-width: 175px;
	}
	h3{font-weight: 400;}
	.dropdown-item {
    color: #676767;
	}
	.form-control::placeholder{
		color: #949494;
	}
	input[type="file"]:focus, input[type="radio"]:focus, input[type="checkbox"]:focus {
		outline-offset: -2px;
    outline: -webkit-focus-ring-color auto 5px;}

	.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
     background-color: #f8b831;
     box-shadow:0 0 3px #f8b831;
}
 .custom-checkbox .custom-control-input:focus ~ .custom-control-label::before {
     box-shadow:0 0 3px #f8b831;
}
 .custom-checkbox .custom-control-input:active ~ .custom-control-label::before {
     box-shadow:0 0 3px #f8b831;
     background:rgba(255,0,0,.3);
}
 .custom-checkbox .custom-control-label::before {
     border-radius: 0.25rem;
}
 .custom-control-label::before {
	background-color: #fff;
}
.abc-checkbox label::before{
	width: 20px;
  height: 20px;
}
.abc-checkbox label::after{
	font-size: 13px;
}
.abc-checkbox-primary input[type="checkbox"]:checked + label::before, .abc-checkbox-primary input[type="radio"]:checked + label::before{
	background-color: #f8b731;
	border-color: #ffb315;
}
</style>
@endsection

@section('title') Registro nuevo @endsection

@section('contenido')
<div class="container-fluid" id="app">
	<h2>Registro nuevo </h2>
	<div class="row">
		<div class="col-12 col-md-4 col-lg-3" id="primerDiv">
			<div class="card">
				<div class="card-body">
					<h3><i class="icofont-ui-user"></i> Información del Cliente</h3>
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="D.N.I." aria-label="Recipient's username" aria-describedby="button-addon2">
						<div class="input-group-append">
							<button class="btn btn-outline-infocat " type="button" id="button-addon2"><i class="icofont-id-card"></i></button>
						</div>
					</div>
					<input type="text" class="form-control" placeholder="Nombres" autocomplete="nope">
					<input type="text" class="form-control" placeholder="Apellidos" autocomplete="nope">
					<input type="text" class="form-control" placeholder="Celular" autocomplete="nope">
					<input type="text" class="form-control" placeholder="Correo" autocomplete="nope">
					<input type="text" class="form-control" placeholder="Dirección" autocomplete="nope">
					<label for="">Fecha de nacimiento:</label>
					<input type="date" class="form-control mt-0" placeholder="Fecha de nacimiento" value="2021-06-01">
					<div class="custom-control custom-checkbox my-3">
						<input id="magicBtn4" type="checkbox" class="custom-control-input">
						<label class="custom-control-label" for="magicBtn4">Límite de crédito</label>
				</div>
					<label for="">Género:</label>
					<div class="d-flex justify-content-around">
						<div class="custom-control custom-radio">
							<input type="radio" id="radMasculino" name="genero" class="custom-control-input" value="masculino" checked>
							<label class="custom-control-label" for="radMasculino">Masculino</label>
						</div>
						<div class="custom-control custom-radio">
							<input type="radio" id="radFemenino" name="genero" class="custom-control-input" value="femenino">
							<label class="custom-control-label" for="radFemenino">Femenino</label>
						</div>
					</div>
					<h5 class="my-3"><i style="font-size: 1.5rem;" class="icofont-camera"></i> Foto de perfil:</h5>
					<div class="w-75 text-center mx-auto p-3">
						<img src="{{url('/images/pe3.png')}}" alt="" id="imgCliente">
						<div class="dropdown">
							<a href="#!" class="text-decoration-none text-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seleccionar foto</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="#"><i class="icofont-rounded-right"></i> Subir foto</a>
								<a class="dropdown-item" href="#"><i class="icofont-rounded-right"></i> Seleccionar un avatar</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
					
				
			

		</div>
		<div class="col">
			<div class="card">
				<div class="card-body">
					<h3><i class="icofont-dog"></i> Datos del Paciente</h3>
					<div class="row">
						<div class="col-4">
							<label for="">Nombre</label>
							<input type="text" class="form-control" placeholder="Nombre" autocomplete="nope">
						</div>
						<div class="col">
							<label for="">Edad: <small id="fechaAprox">Hoy</small></label>
							<div class="form-row">
								<div class="col">
									<input type="number" class="form-control fechaCalculada" placeholder="Días" onkeydown="return ( event.ctrlKey || event.altKey || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106) || (event.keyCode==8) || (event.keyCode==9)  || (event.keyCode>34 && event.keyCode<40)  || (event.keyCode==46) )" id="txtDias">
								</div>
								<div class="col">
									<input type="number" class="form-control fechaCalculada" placeholder="Meses" onkeydown="return ( event.ctrlKey || event.altKey || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106) || (event.keyCode==8) || (event.keyCode==9)  || (event.keyCode>34 && event.keyCode<40)  || (event.keyCode==46) )" id="txtMeses">
								</div>
								<div class="col">
									<input type="number" class="form-control fechaCalculada" placeholder="años" onkeydown="return ( event.ctrlKey || event.altKey || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106) || (event.keyCode==8) || (event.keyCode==9)  || (event.keyCode>34 && event.keyCode<40)  || (event.keyCode==46) )" id="txtAnios">
								</div>
							</div>
						
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label for="">Especie</label>
								<select id="my-select" class="form-control" name="">
									<option>Perro</option>
									<option>Gato</option>
									<option>Otro</option>
								</select>
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="">Raza</label>
								<select id="my-select" class="form-control" name="">
									<option>Ninguna</option>
									<option>Buldog</option>
									<option>Labrador</option>
								</select>
							</div>
						</div>
						<div class="col">
							<label for="">Sexo</label>
							<div class="d-flex justify-content-around">
								<div class="custom-control custom-radio">
									<input type="radio" id="radMacho" name="sexo" class="custom-control-input" value="macho" checked>
									<label class="custom-control-label" for="radMacho">Macho</label>
								</div>
								<div class="custom-control custom-radio">
									<input type="radio" id="radHembra" name="sexo" class="custom-control-input" value="hembra">
									<label class="custom-control-label" for="radHembra">Hembra</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label for="">Peso (Kg.)</label>
								<input type="number" class="form-control" placeholder="Peso" autocomplete="nope" value="1">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="">Color</label>
								<input type="text" class="form-control" placeholder="Color" autocomplete="nope" value="Negro">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="">Código pers.</label>
								<input type="text" class="form-control" placeholder="Código personalizado" autocomplete="nope" value="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="form-check abc-checkbox abc-checkbox-primary">
								<input class="form-check-input" id="chkCastrado" type="checkbox">
								<label class="form-check-label" for="chkCastrado"> Sin castrar</label>
							</div>
						</div>
						<div class="col">
							<div class="form-check abc-checkbox abc-checkbox-primary">
								<input class="form-check-input" id="chkReproductor" type="checkbox" checked>
								<label class="form-check-label" for="chkReproductor"> Reproductor</label>
							</div>
						</div>
						<div class="col">
							<div class="form-check abc-checkbox abc-checkbox-primary">
								<input class="form-check-input" id="chkAdoptado" type="checkbox" checked>
								<label class="form-check-label" for="chkAdoptado"> Adoptado</label>
							</div>
						</div>
						<div class="col">
							<div class="form-check abc-checkbox abc-checkbox-primary">
								<input class="form-check-input" id="chkDesparasitado" type="checkbox" >
								<label class="form-check-label" for="chkDesparasitado"> Desparasitado</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label for="txtInfoAdicional">Motivo de consulta</label>
							<input type="text" class="form-control" placeholder="Motivo" autocomplete="nope">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label for="txtInfoAdicional">Información adicional</label>
								<textarea id="txtInfoAdicional" class="form-control" name="" rows="2"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h5><i style="font-size: 1.5rem;" class="icofont-camera"></i> Foto del animal:</h5>
							<div class="w-75 mx-auto">
								<img src="{{url('/images/hamster.jpg')}}" alt="" class="img-fluid rounded-circle">
							</div>
							<div class="dropdown text-center">
								<a href="#!" class="text-decoration-none text-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seleccionar foto</a>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" href="#"><i class="icofont-rounded-right"></i> Subir foto</a>
									<a class="dropdown-item" href="#"><i class="icofont-rounded-right"></i> Seleccionar un avatar</a>
								</div>
							</div>
						</div>
					</div> 
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card">
				<div class="card-body">
					<button class="btn btn-outline-warning btn-block btn-lg"><span class="icon-gitlab"></span> Terminar registro</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script>
	$('input[type=radio][name="genero"]').on('change', function() {
		switch ($(this).val()) {
			case 'masculino':
				$('#imgCliente').attr('src', '/images/pe3.png')
				break;
			case 'femenino':
				$('#imgCliente').attr('src', '/images/pe6.png')
				break;
		}
	});
	$('.fechaCalculada').on('keyup', function(e){
		let dias=0, meses=0, anios=0, fechaCalc;

		if($('#txtDias').val() !=''){ dias = $('#txtDias').val(); }
		if($('#txtMeses').val() !=''){ meses = $('#txtMeses').val(); }
		if($('#txtAnios').val() !=''){ anios = $('#txtAnios').val(); }
		moment.locale('es')
		fechaCalc = moment().subtract(anios, 'years').subtract(meses, 'months').subtract(dias, 'days')
		$('#fechaAprox').text(fechaCalc.fromNow() + " aprox. " + fechaCalc.format('DD/MM/YYYY') );
	});
	$('#chkCastrado').on('change', function() { //console.log($('#chkCastrado:checked').val())
		if($('#chkCastrado:checked').val()){ $('#chkCastrado').next().text('Castrado')
		}else{ $('#chkCastrado').next().text('Sin castrar') }
	});
	$('#chkReproductor').on('change', function() { //console.log($('#chkCastrado:checked').val())
		if($('#chkReproductor:checked').val()){ $('#chkReproductor').next().text('Reproductor')
		}else{ $('#chkReproductor').next().text('Infecundo') }
	});
	$('#chkAdoptado').on('change', function() { //console.log($('#chkCastrado:checked').val())
		if($('#chkAdoptado:checked').val()){ $('#chkAdoptado').next().text('Adoptado')
		}else{ $('#chkAdoptado').next().text('Callejero') }
	});
	$('#chkDesparasitado').on('change', function() { //console.log($('#chkCastrado:checked').val())
		if($('#chkDesparasitado:checked').val()){ $('#chkDesparasitado').next().text('Desparasitado')
		}else{ $('#chkDesparasitado').next().text('Sin desparasitar') }
	});
</script>
@endsection