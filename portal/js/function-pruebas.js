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
	$('#n_mesa').change(function() {
		$('#n_dni').val($(this).val());
	});


});

function scrollTop(){
		$('html,body').animate({
			scrollTop: $('#header').offset().top
		}, 2000);	
}		
 
function cargaFormPCPH(){
	$.ajax({
  		  type: "POST",
  		  url: "formPCPH.php",
		  cache: false,
  		  "success":function(html){		  
			$("#container").html(html);
  		  }
	});
}     


function reimprimirPCRS(){ 
	document.getElementById("email2").value = ""; /*borra el mail*/
	$("#carga_listado_declaracion").empty(); /*vacio listado*/ 
	document.getElementById('emailConfirm').style.display = 'block';
	$('html,body').animate({
			scrollTop: $('#emailConfirm').offset().top
		}, 2000);	
}
function nuevoPCRS(){
	if (document.getElementById("email2").value !== ""){
		var dni = $("#n_mesa").val();
		var mail = $("#email2").val();		
	}
	document.getElementById("email2").value = ""; 
	document.getElementById("emailConfirm").style.display = 'none';
	$("#carga_listado_declaracion").empty();
	$("#btn_reimprimir").removeAttr("disabled");
	document.getElementById('activo').style.display = 'block';	
	scrollTop();
}