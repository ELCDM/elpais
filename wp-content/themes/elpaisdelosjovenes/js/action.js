var $ = jQuery.noConflict();
$(document).ready(function (){

//Abrir buscador
$('.buscador').click(function(){
	$('.buscadorform').toggleClass('dblock');
});

//Abrir buscador en movil
$('.buscarmov').click(function(){
	console.log('abrir');
	$('.buscadorform').toggleClass('dblock');
});

//Bajar a la radio
$('.iralaradio').click(function (){
	$("html, body").animate({ scrollTop: $('.rad').offset().top }, 1000);	
});

//Menu hover
let pantalla =  $(window).width();
if (pantalla > 990){
let category;
$( ".itemenu" )
.mouseover(function() {
	$('.submenucontent').addClass('dblock');

	category = $(this).attr('cat');
	$.ajax({
		type: "POST",
		url: templateurl + "/inc/data.php",
		data: { cat: category}
	})
	.done(function (data) {
		//console.log(data);
		$('.aquicontent').html(data);
		//HOVER DE MENU
		$( ".unaultim" )
		.mouseover(function() {
			$(this).find('.etiqueta').addClass('backcolor');
			$(this).find('.text-block').addClass('colortext');	
		}).mouseout(function() {
			$(this).find('.etiqueta').removeClass('backcolor');
			$(this).find('.text-block').removeClass('colortext');
		});
	});	
	
})
.mouseout(function() {
	$('.submenucontent').removeClass('dblock');
});

//ABRIR 
$( ".submenucontent" )
.mouseover(function() {
	$('.submenucontent').addClass('dblock');	
}).mouseout(function() {
	$('.submenucontent').removeClass('dblock');
});

//LOADING DE GIF AJAX
$(document).ajaxStart(function(){
	$('.loaderimg').css('display','block');
});

$(document).ajaxComplete(function(){
	$('.loaderimg').css('display','none');
});
}
//hover de text
function Hover(element, elementcambio, clase) {
	$(element)
	.mouseover(function() {
		$(this).find(elementcambio).addClass(clase);	
	}).mouseout(function() {
		$(this).find(elementcambio).removeClass(clase);
	});
}
//hover cuadrito
Hover(".unanotacuadrit" , '.tituldelanotcuad', 'colornaranja');
Hover(".unanotacuadrit" , '.fechdenotacuad', 'colornaranja');
//hover nota lateral
Hover(".unanotahoriz" , '.tituldelanotahoz', 'colorazul');
Hover(".unanotahoriz" , '.fechvert', 'colorazul');
Hover(".unanotahoriz" , '.textdenotvert', 'colorazul');
Hover(".unanotapeque" , '.tituldenotfoot', 'colornaranja');
Hover(".lanotagrande" , '.tituldelanotcuad', 'colorazul');
Hover(".unanotita" , '.tituldeunanotita', 'colorazul');

function ventanaSecundaria (URL){ 
   window.open(URL,"ventana1","width=300,height=300,scrollbars=NO") 
} 

//SLIDER GALERIA

  //$('.contentdelanota .gallery').bxSlider();

});