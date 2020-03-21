<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	require '../../librerias/phpmailer/src/Exception.php';
	require '../../librerias/phpmailer/src/PHPMailer.php';
	require '../../librerias/phpmailer/src/SMTP.php';

	function enviarCorreo($datos){		

		$mail = new PHPMailer(true);
		$respuesta = array();

		try {
		    //Server settings
		    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
		    $mail->isSMTP();
		    $mail->Host       = 'smtp.ionos.mx';
		    $mail->SMTPAuth   = true;
		    $mail->Username   = 'jardineria_lago_azul@dwdmp.com';
		    $mail->Password   = 'JLAMail@I0n05';
		    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		    $mail->Port       = 587;

		    //Recipients
		    $mail->setFrom('jardineria_lago_azul@dwdmp.com', 'Formulario de contacto en Jardineria Lago Azul');
		    $mail->addAddress($datos['email'], 'Jardineria Lago Azul');
		    $mail->addReplyTo($datos['email'], $datos['nombre']);

		    // Content
		    $mail->isHTML(true);
		    $mail->Subject = 'Nuevo mensage de ' . $datos['nombre'];
		    $mail->Body    = $datos['mensaje'] . '<br>' .$datos['email'];
		    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		    $mail->send();
		   	$respuesta = array(
		   		'estado'  => 'Exito',
		   		'campo'   => False,
		   		'mensaje' => 'Gracias por contactarnos, su mensaje ha sido enviado con éxito, atendernos a la brevedad posible.', 
		   	);
		} catch (Exception $e) {
			$respuesta = array(
		   		'estado'  => 'Error',
		   		'campo'   => False,
		   		'mensaje' => 'No pudimos enviar su correo, intentelo mas tarde. ' . $mail->ErrorInfo, 
		   	);
		    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
		
		return $respuesta;
	}