$(document).ready(function() {
	if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement("style")

    msViewportStyle.appendChild(
        document.createTextNode(
            "@-ms-viewport{width:auto!important}"
        )
    )

    document.getElementsByTagName("head")[0].appendChild(msViewportStyle)
}
/*	//Scroll
	$(window).scroll(function() {
		if ($(this).scrollTop() > 90){
			$('#barra').addClass("fixed-top").fadeIn();
			$('.container').addClass("margen").fadeIn();
		} else {
			$('#barra').removeClass("fixed-top");
			$('.container').removeClass("margen");
		}
    });
*/	


var input = document.getElementById("searchword");
if(input){
	input.addEventListener("keyup", function(event) {
	  if (event.keyCode === 13) {
		event.preventDefault();
		document.getElementById("botbuscar").click();
	  }
	});
 }
 
document.getElementById("video").addEventListener("mouseover", mouseOver_video);
document.getElementById("video").addEventListener("mouseout", mouseOut_video); 
document.getElementById("recuadro1").addEventListener("mouseover", mouseOver_mapa);
document.getElementById("recuadro1").addEventListener("mouseout", mouseOut_mapa);
document.getElementById("recuadro2").addEventListener("mouseover", mouseOver_geoservicios);
document.getElementById("recuadro2").addEventListener("mouseout", mouseOut_geoservicios);
document.getElementById("recuadro3").addEventListener("mouseover", mouseOver_metadatos);
document.getElementById("recuadro3").addEventListener("mouseout", mouseOut_metadatos);
 
});

function mouseOver_video() {
	$('#boton_play').removeClass('boton_play');
	$('#boton_play').addClass('boton_play2');
}
function mouseOut_video() {
	$('#boton_play').removeClass('boton_play2');
	$('#boton_play').addClass('boton_play');
}
function mouseOver_mapa() {
	$('#serv_text1').removeClass('cerrado');
}
function mouseOut_mapa() {
	$('#serv_text1').addClass('cerrado');
}
function mouseOver_geoservicios() {
	$('#serv_text2').removeClass('cerrado');
}
function mouseOut_geoservicios() {
	$('#serv_text2').addClass('cerrado');
}
function mouseOver_metadatos() {
	$('#serv_text3').removeClass('cerrado');
}
function mouseOut_metadatos() {
	$('#serv_text3').addClass('cerrado');
}


function scrollTop(){
		$('html,body').animate({
			scrollTop: $('#header').offset().top
		}, 2000);	
}		
 
function sabermas(){
	var bot = document.getElementById("bot").value;
	if (bot == '') {
		$('#sabermas').removeClass('cerrado');
		$('#info').removeClass('info');
		$('#info').addClass('info2');
		document.getElementById("bot").value ='1';
		document.getElementById("info_title").innerHTML = 'Sistema de<br>Información Territorial Unificado';
		document.getElementById("info_mas").innerHTML = '<a onclick="sabermas();">Cerrar información <b> &#8213&#8213&#9656 </b></a>';
		document.getElementById("info_texto").style.display = 'block';
	} else {
	$('#sabermas').addClass('cerrado');
	$('#info').removeClass('info2');
	$('#info').addClass('info');
	document.getElementById("bot").value ='';
	document.getElementById("info_title").innerHTML = '¿Qué es el Sistema de Información Territorial Unificado?';
	document.getElementById("info_mas").innerHTML = '<a onclick="sabermas();">Quiero saber más <b> &#8213&#8213&#9656 </b></a>';
	document.getElementById("info_texto").style.display = 'none';
	}
}     



function buscar() {
	var url = "http://situ.santacruz.gob.ar/geonetwork/srv/spa/catalog.search#/search?any=";
	var palabra = document.getElementById("searchword").value;
	//location.href = url+palabra; 
	window.open(url+palabra, '_blank');
}
//borrar de la url los parametros
var newURL = location.href.split("?")[0];
window.history.pushState('object', document.title, newURL);
