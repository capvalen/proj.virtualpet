<!-- Modal para ingresar Usuario Nuevo  -->
<div class="modal fade modal-ingresarNewUsuario noselect" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
		<div class="modal-header-warning">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-animal-squirrel"></i> Paciente nuevo</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			<div class="row">
				<div class="col-xs-3">
					<label for=""><span class="red-text text-accent-4">*</span> D.N.I.</label>
					<input type="number" class="form-control mayuscula" id="txtCliDni" oninput="if(value.length>8)value=value.slice(0,8)" >
				</div>
				<div class="col-xs-3">
					<label for=""><span class="red-text text-accent-4">*</span> Apellidos del cliente</label>
					<input type="text" class="form-control mayuscula" id="txtCliApellido" maxlength="200">
				</div>
				<div class="col-xs-3">
					<label for=""><span class="red-text text-accent-4">*</span> Nombres del cliente</label>
					<input type="text" class="form-control mayuscula" id="txtCliNombre" maxlength="200">
				</div>
				
			</div>
			<div class="row">
				<div class="col-xs-3">
					<label for=""><span class="red-text text-accent-4">*</span> Fecha de Nacimiento</label>
			        <div class="form-group">
			            <div class='input-group date' id='dtpCliFechaNacimiento'>
			                <input type='text' class="form-control text-center" />
			                <span class="input-group-addon">
			                    <span class="fa fa-calendar">
			                    </span>
			                </span>
			            </div>
			        </div>
			    </div>

				<div class="col-xs-6">
					<label for=""><span class="red-text text-accent-4">*</span> Dirección</label>
					<input type="text" class="form-control mayuscula" id="txtCliDireccion" >
				</div>
				<div class="col-xs-3">
					<label for=""><span class="red-text text-accent-4">*</span> Género</label>
					<select class="selectpicker mayuscula" title="Sexo..." id="cmbCliGenero" data-width='100%' data-live-search="true">
						<?php require 'php/listarGeneroOpt.php'; ?>
					</select>
				</div>
				
			</div>
			<div class="row">
				<div class="col-xs-3">
					<label for=""><span class="red-text text-accent-4">*</span> Celular</label>
					<input type="text" class="form-control mayuscula" id="txtCliCelular" >
				</div>
				<div class="col-xs-3">
					<label for=""><span class="red-text text-accent-4">*</span> Teléfono fijo</label>
					<input type="text" class="form-control mayuscula" id="txtCliFijo" >
				</div>
				<div class="col-xs-3">
					<label for="">Correo Electrónico</label>
					<input type="text" class="form-control mayuscula" id="txtCliCorreo" >
				</div>
			</div>

			</div>			
		</div>
		
		<div class="modal-footer">
			<h4 class="red-text text-darken-2 hidden animated fadeIn pull-left"><i class="icofont icofont-animal-cat-alt-4"></i><span class="spanError">Hubo un error interno</span></h4>

			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-close"></i> Cancelar</button>
			<button class="btn btn-success btn-outline" id="btnIngresarClienteNw"><div class="fa-spin sr-only"><i class="icofont icofont-spinner"></i> </div><i class="icofont icofont-social-meetme"></i> Registrar cliente</button></div>
	</div>
	</div>
</div>



<!-- Modal para ingresar Mascota Nueva  -->
<div class="modal fade modal-ingresarMascotaNueva noselect" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
		<div class="modal-header-primary">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-animal-squirrel"></i> Paciente nuevo</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			<div class="row">
				<div class="col-xs-3">
					<label for=""><span class="red-text text-accent-4">*</span> Especie</label>
					<select class="selectpicker mayuscula" id="cmbPacEspecie" title="Especie..." data-width='100%' data-live-search="true">
						<?php require 'php/listarEspeciesOpt.php'; ?>
					</select>
				</div>
				<div class="col-xs-3">
					<label for=""><span class="red-text text-accent-4">*</span> Raza</label>
					<select class="selectpicker mayuscula" id="selectRaza" title="Raza..." data-width='100%' data-live-search="true" disabled="">
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3">
					<label for=""><span class="red-text text-accent-4">*</span> Nombre de paciente</label>
					<input type="text" class="form-control mayuscula" id="txtPacNombre" >
				</div>
				<div class="col-xs-3">
					<label for=""><span class="red-text text-accent-4">*</span> Color</label>
					<input type="text" class="form-control mayuscula" id="txtPacColor" >
				</div>
				<div class="col-xs-3">
					<label for=""><span class="red-text text-accent-4">*</span> Sexo</label>
					<select class="selectpicker mayuscula" id="cmbPacSexo" title="Sexo..." data-width='100%' data-live-search="true">
						<?php require 'php/listarSexoOpt.php'; ?>
					</select>
				</div>
				<div class="col-xs-3">
					<label for="">Código personalizado</label>
					<input type="text" class="form-control mayuscula" id="txtPacCodPersonal" >
				</div>
			</div>
			<div class="row espaciar">
				<div class="col-xs-3">
					 <div class="material-switch pull-left ">
						<input id="optCastrado" type="checkbox"/>
						<label for="optCastrado" class="label-primary"></label>
					</div>
					<label for="optCastrado" class="labelOff" id="">Castrado</label>
				</div>
				<div class="col-xs-3">
					 <div class="material-switch pull-left ">
						<input id="optReproductor" type="checkbox"/>
						<label for="optReproductor" class="label-primary" ></label>
					</div>
					<label for="optReproductor" class="labelOff" id="">Reproductor</label>
				</div>
				<div class="col-xs-3">
					 <div class="material-switch pull-left ">
						<input id="optAdoptado" type="checkbox"/>
						<label for="optAdoptado" class="label-primary" ></label>
					</div>
					<label for="optAdoptado" class="labelOff" id="">Adoptado</label>
				</div>
				<div class="col-xs-3">
					 <div class="material-switch pull-left ">
						<input id="optCallejero" type="checkbox"/>
						<label for="optCallejero" class="label-primary" ></label>
					</div>
					<label for="optCallejero" class="labelOff" id="">Callejero</label>
				</div>
			</div>

			</div>			
			</div>
			
		<div class="modal-footer">
			<h4 class="red-text text-darken-2 hidden animated fadeIn pull-left"><i class="icofont icofont-animal-cat-alt-4"></i><span class="spanError">Hubo un error interno</span></h4>
			
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-close"></i> Cancelar</button>
			<button class="btn btn-primary btn-outline" id="btnRegistrarPaciente"><div class="fa-spin sr-only"><i class="icofont icofont-spinner"></i> </div><i class="icofont icofont-social-meetme"></i> Registrar paciente</button></div>
	</div>
	</div>
</div>