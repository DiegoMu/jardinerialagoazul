$(document).ready(function(){
	$('#boton_envio').click(function(){
		var formulario = new FormData($('#formulario_contacto')[0]);
		$.ajax({
			url: "/modulos/contacto/despachador.php",
			type: "POST",
			data: formulario,
			processData: false, 
			contentType: false,
			success: function(respuesta){
				mostrarRespuesta(respuesta);
			},
			error: function(respuesta){
				console.log(respuesta.responseText);
			}
		});
	});

	function mostrarRespuesta(respuesta) {
		if(respuesta.estado == 'Exito'){
			alert(respuesta.mensaje);
			document.getElementById('formulario_contacto').reset();	
		}
		if(respuesta.estado == 'Error'){
			alert(respuesta.mensaje);
			if(respuesta.campo)
				$('#' + respuesta.campo).focus();
		}
	}
});
