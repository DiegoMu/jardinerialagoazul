<?php	
	function validarDatos() {

		$email     = $_POST['email'];
		$nombre    = $_POST['nombre'];
		$mensaje   = $_POST['mensaje'];
		$respuesta = array();

		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			if($nombre != '') {
				if($mensaje != '') {
					$respuesta = array(
				        'estado' => 'Exito',
				        'campo'  => FALSE,
				        'mensaje'=> 'Datos validados',
				        'datos' => array(
				        	'nombre'  => trim($nombre),
				        	'email'   => $email,
				        	'mensaje' => $mensaje,
				        )
			    	);
				} else {
					$respuesta = array(
				        'estado' => 'Error',
				        'campo'  => 'mensaje',
				        'mensaje'=> 'Debe de escribir un mensaje'
			    	);
				}
			} else {
				$respuesta = array(
			        'estado' => 'Error',
			        'campo'  => 'nombre',
			        'mensaje'=> 'Debe de escribir un Nombre'
			    );	
			}
		} else {
			$respuesta = array(
		        'estado' => 'Error',
		        'campo'  => 'email',
		        'mensaje'=> 'Encontramos un error en el correo electrónico que ingreso, por favor verifique su correo.'
		    );
		}

		return $respuesta;
	}
