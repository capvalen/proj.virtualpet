$(document).ready(function () {
	$('.mitooltip').tooltip();
	$('.divPrincipalDere').niceScroll({
		 cursorcolor: '#53619d',
		 cursorwidth: 4,
		 cursorborder: 'none'
	 });
	$("#sidebar").niceScroll({
		 cursorcolor: '#53619d',
		 cursorwidth: 4,
		 cursorborder: 'none'
	 });

	 $('#dismiss, .overlay').on('click', function () {
		$('#sidebar').removeClass('active');
		$('.overlay').fadeOut();
	 });

	 $('.btnMenuGeneral').on('click', function () {
		 $('#sidebar').addClass('active');
		 $('.overlay').fadeIn();
		 $('.collapse.in').toggleClass('in');
		 $('a[aria-expanded=true]').attr('aria-expanded', 'false');
	 });
	 $.fn.modal.prototype.constructor.Constructor.DEFAULTS.backdrop = 'static'; //Para que no cierre el modal, cuando hacen clic en cualquier parte
});
$(function () {
	$('#datetimepicker12').datetimepicker({ inline: true, sideBySide: false, format: 'LL', locale: 'es'});
	$('#dtpCliFechaNacimiento').datetimepicker({ format: 'DD/MM/YYYY', locale: 'es'});
	$('#dtpCliFechaNacimiento').data("DateTimePicker").maxDate(moment().format('DD/MM/YYYY'));
	$('#dtpMascFechaNacimiento').datetimepicker({ format: 'DD/MM/YYYY', locale: 'es'});
	$('#dtpMascFechaNacimiento').data("DateTimePicker").maxDate(moment().format('DD/MM/YYYY'));
});

function datosUsuario(){
	$.ajax({ url: 'php/datosBasicosUsuario.php', type: 'POST'}).done(function (resp) {
		$.JsonUsuario=JSON.parse(resp)[0]; //contiene los datos principales del usuario
		//console.log($.JsonUsuario);
	});
}

$('#btnBorrarFiltro').click(function () {
	$('#conjuntoBagnes').removeClass('hidden');
	$('#conjuntoBagnes2').addClass('hidden');
});
$('#btnBuscarGeneral').click(function () { buscarTermino(); });
$('#txtBuscarTermino').keypress(function (e) {
	if (e.keyCode == 13){
		buscarTermino();
	} 
});
function buscarTermino() {
	$('#conjuntoBagnes').addClass('hidden');
	$('#conjuntoBagnes2').removeClass('hidden');
	var texto=$('#txtBuscarTermino').val();
	if(texto.length>3){
		//console.log('hola')
		$.ajax({url:'php/buscarClienteNombre.php', type: 'POST', data: {campo:texto}}).done(function (resp) { console.log(resp)
			if(JSON.parse(resp).length>0){
				$.each(JSON.parse(resp), function (i, dato) {
					$('#tbodyResultBusqueda').append(`<tr>
							<th scope="row">${i+1}</th>
							<td class="mayuscula">${dato.cliApellidos.toLowerCase()} ${dato.cliNombres.toLowerCase()}</td>
							<td>${dato.cliDni}</td>
							<td>${dato.cliCelular} / ${dato.cliTelefono}</td>
							<td class="idCliente hidden">${dato.idCliente}</td>
							<td><a class="btn btn-sm btn-success" href="cliente.php?idCliente=${dato.idCliente}" role="button">Ver <span class="glyphicon glyphicon-user"></span></a></td>
						</tr>`);
				});
			}
			$('.modal-resultadosBusqueda').modal('show');
		});
	}
}
$('.modal-ingresarMascotaNueva').on('click','.optEspecie',function () {
	//console.log('Seleccionaste: '+$(this).attr('data-tokens'));
	var idEspec=$(this).attr('data-tokens');
	$.ajax({url:'php/listarRazaPorEspecie.php', type: 'POST', data: {idEsp:idEspec}}).done(function (resp) {
		if(JSON.parse(resp).length>0){
			$.each(JSON.parse(resp), function (i, raza) {
				$('#selectRaza').append(`<option class="optRaza mayuscula" data-tokens="${raza.idRaza}">${raza.razDescripcion}</option>`);
			});
		}else{
			$('#selectRaza').append(`<option class="optRaza mayuscula" data-tokens="24">Ninguna</option>`);
			$('#selectRaza').selectpicker('val','Ninguna');
			$('#txtPacNombre').focus();
		}
		$('#selectRaza').removeAttr('disabled').selectpicker('refresh');
	});
});
$('.modal-ingresarMascotaNueva').on('click','.optRaza',function () {
	//console.log('Seleccionaste: '+$(this).attr('data-tokens'));
	$('#txtNombrePaciente').focus();
});
$('.modal-ingresarMascotaNueva input').keypress(function (e) {
	if (e.keyCode == 13){
		$(this).parent().next().find('input').focus();
	} 
});
$('.btnAddNewGeneral').click(function () {
	$('.modal-ingresarNewUsuario').modal('show');
});
$('#btnIngresarClienteNw').click(function () {
	var genero=parseInt($('#cmbCliGenero').prev().find('.selected a').attr('data-tokens')-1);
	//console.log(genero)
	// console.log($('#txtCliDni').val())
	if(! $(this).hasClass('cargando')){
		$('.modal-ingresarNewUsuario .spanError').parent().removeClass('fadeOut');

		if( $('#txtCliDni').val() ==''){ $('.modal-ingresarNewUsuario .spanError').text('Falta rellenar un Dni').parent().removeClass('hidden');}
		if( $('#txtCliDni').val().length !=8){ $('.modal-ingresarNewUsuario .spanError').text('Ingrese un DNI correcto').parent().removeClass('hidden');}
		else if( $('#txtCliApellido').val() ==''){ $('.modal-ingresarNewUsuario .spanError').text('Falta rellenar los apellidos').parent().removeClass('hidden');}
		else if( $('#txtCliNombre').val() ==''){ $('.modal-ingresarNewUsuario .spanError').text('Falta rellenar los nombres').parent().removeClass('hidden');}
		else if( $('#txtCliDireccion').val() ==''){ $('.modal-ingresarNewUsuario .spanError').text('Rellene la dirección del cliente').parent().removeClass('hidden');}
		else if( genero==null ){ $('.modal-ingresarNewUsuario .spanError').text('Seleccione un género').parent().removeClass('hidden');}
		else if( $('#dtpCliFechaNacimiento').find('input').val() ==''){ $('.modal-ingresarNewUsuario .spanError').text('Falta rellenar la fecha de nacimiento').parent().removeClass('hidden');}
		else if( $('#txtCliCelular').val() =='' && $('#txtCliFijo').val() ==''){ $('.modal-ingresarNewUsuario .spanError').text('Mínimo debe rellenar un celular o fijo').parent().removeClass('hidden');}
		else{$('.modal-ingresarNewUsuario .spanError').parent().addClass('fadeOut');
		/*Listo para guardar cliente*/
		$('.fa-spin').removeClass('sr-only').next().addClass('sr-only');
		$('#btnIngresarClienteNw').addClass('cargando');
		$.ajax({url: 'php/insertarClienteNuevo.php', type: 'POST', data: {
			apellido: $('#txtCliApellido').val(), nombre: $('#txtCliNombre').val(), dni: $('#txtCliDni').val(),
			direc: $('#txtCliDireccion').val(), mail: $('#txtCliCorreo').val(), cel: $('#txtCliCelular').val(), telef: $('#txtCliFijo').val(),
			idUser: $.JsonUsuario.idUsuario, cliSexo: genero, fechNac: $('#dtpCliFechaNacimiento').find('input').val() }}).done(function (resp) { //console.log(resp);
				$('#btnIngresarClienteNw').removeClass('cargando');
				if(resp>0){
					window.location='cliente.php?idCliente='+resp;
				}
			
		});

		}
	}


});
$('#btnSalirSistema').click(function () { window.location='php/desconectar.php'; });

function calcularFechaAnioMes(fechaEntrada) {
	var fecNac=moment(fechaEntrada, 'DD/MM/YYYY');
	var años=moment().diff(fecNac, 'years');
	fecNac.add(años, 'years');
	var meses= moment().diff(fecNac, 'months');
	$('#cliEdadSimple').text(años);
	return años + ' años y '+ meses + ' meses';
	
}
$('#btnRegistrarPaciente').click(function () {
	var castrado=false, reproductor=false, adoptado=false , callejero=false;
	var especie=parseInt($('#cmbPacEspecie').prev().find('.selected a').attr('data-tokens'));
	var raza=parseInt($('#selectRaza').prev().find('.selected a').attr('data-tokens'));
	var sexo=parseInt($('#cmbPacSexo').prev().find('.selected a').attr('data-tokens'));
	var nomPaci=$('#txtPacNombre').val();
	var colorPaci=$('#txtPacColor').val();
	var codPersPaci=$('#txtPacCodPersonal').val();
	//true
	if($('#optCastrado').is(':checked')){ castrado=true; }
	if($('#optReproductor').is(':checked')){ reproductor=true; }
	if($('#optAdoptado').is(':checked')){ adoptado=true; }
	if($('#optCallejero').is(':checked')){ callejero=true; }

	//console.log(especie)
	if(! $(this).hasClass('cargando')){
		$('.modal-ingresarNewUsuario .spanError').parent().removeClass('fadeOut');
		if(especie==null || isNaN(especie )){ $('.modal-ingresarMascotaNueva .spanError').text('Seleccione una especie').parent().removeClass('hidden');}
		else if(raza==null || isNaN(raza )){ $('.modal-ingresarMascotaNueva .spanError').text('Seleccione una raza').parent().removeClass('hidden');}
		else if(nomPaci==''){ $('.modal-ingresarMascotaNueva .spanError').text('Rellene el nombre del paciente').parent().removeClass('hidden');}
		else if(colorPaci==''){ $('.modal-ingresarMascotaNueva .spanError').text('Rellene un color').parent().removeClass('hidden');}
		else if(sexo==null || isNaN(sexo )){ $('.modal-ingresarMascotaNueva .spanError').text('Seleccione un sexo').parent().removeClass('hidden');}
		else{$('.modal-ingresarMascotaNueva .spanError').parent().addClass('fadeOut');
			$('.fa-spin').removeClass('sr-only').next().addClass('sr-only');
			// $.ajax({})
		}
	}

});
$('#dtpMascFechaNacimiento').on('dp.change', function () {
	var campoTex='';
	var hoy=moment();
	var dtpFecha=moment( $('#dtpMascFechaNacimiento ').find('input').val(), 'DD/MM/YYYY');
	var añosDif=hoy.diff(dtpFecha, 'years');
	dtpFecha=dtpFecha.add(añosDif, 'years');
	var mesesdif=hoy.diff(dtpFecha, 'months');
	dtpFecha=dtpFecha.add(mesesdif, 'months');
	var diasdif=hoy.diff(dtpFecha, 'days');

	//console.log( añosDif + ' / ' + mesesdif+ ' / ' +  diasdif)
	if(añosDif!=0 && añosDif!=1){campoTex+= añosDif + ' años, ';}
	else if(añosDif==1){campoTex+= añosDif + ' año, ';}
	if(mesesdif!=0 && mesesdif!=1){campoTex+= mesesdif + ' meses, ';}
	else if(mesesdif==1){campoTex+= mesesdif + ' mes, ';}
	if(diasdif!=0 && diasdif!=1) {campoTex+= diasdif + ' días.';}
	else if( diasdif==1){campoTex+= diasdif + ' día.';}
	$('#ayudaEdadPaciente').text(campoTex);

})