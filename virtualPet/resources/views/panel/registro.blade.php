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
</style>
@endsection

@section('title') Registro nuevo @endsection

@section('contenido')
<div class="container-fluid" id="app">
	<h1>Registro nuevo </h1>
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



				</div>
			</div>
		</div>
		<div class="col">

		</div>
	</div>
</div>
@endsection
@section('script')
<script>
	$('input[type=radio][name=genero]').on('change', function() {
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
	})
</script>
@endsection