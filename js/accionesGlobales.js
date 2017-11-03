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
});
$(function () {
	$('#datetimepicker12').datetimepicker({ inline: true, sideBySide: false, format: 'LL', locale: 'es'});
});
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
	if(texto.length!=0){
		console.log('hola')
	}
}