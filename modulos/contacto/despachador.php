<?php
	header('Access-Control-Allow-Origin: *');
	header('Content-type: application/json');

	require 'validar_datos.php';
	require 'enviar_correo.php';

	$respuesta = array();

	if(isset($_POST['accion'])) { 
		$accion = trim($_POST['accion']);
		switch ($accion) {
			case 'enviar_correo':
				$resultado = validarDatos();
				if($resultado['estado'] == 'Exito') {
					$resultado = enviarCorreo($resultado['datos']);
					if($resultado['estado'] == 'Exito'){
						$respuesta = $resultado;
					}
					else{
						$respuesta = array(
							'estado' => 'Error',
					        'campo'  => FALSE,
					        'mensaje'=> $resultado['mensaje']
						);
					}
				} else {
					$respuesta = $resultado;
				}
				break;
			
			default:
				$respuesta = array(
			        'estado' => 'Error',
			        'campo'  => FALSE,
			        'mensaje'=> 'Solicitud no reconocida'
			    );
				break;
		}
	} else{
		$respuesta = array(
	        'estado' => 'Error',
	        'campo'  => FALSE,
	        'mensaje'=> 'No se encontro la solicitud'
	    );
	}

	echo json_encode($respuesta); 
