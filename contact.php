<?php
/**
 * EDIT THE VALUES BELOW THIS LINE TO ADJUST THE CONFIGURATION
 * EACH OPTION HAS A COMMENT ABOVE IT WITH A DESCRIPTION
 */
/**
 * Specify the email address to which all mail messages are sent.
 * The script will try to use PHP's mail() function,
 * so if it is not properly configured it will fail silently (no error).
 */
$mailTo     = 'xfonz@hotmail.com';
$email_from = "contacto@alejandrofonz.com";

/**
 * Set the message that will be shown on success
 */
$successMsg = 'Gracias. Tu mensaje se envio satisfactoriamente.';

/**
 * Set the message that will be shown if not all fields are filled
 */
$fillMsg    = 'Por favor, rellena todos los campos';

/**
 * Set the message that will be shown on error
 */
$errorMsg   = 'Disculpa, hubo un error al enviar tu mensaje.';

/**
 * DO NOT EDIT ANYTHING BELOW THIS LINE, UNLESS YOU'RE SURE WHAT YOU'RE DOING
 */

?>
<?php
		$msg = "Nombre: ".$_POST['contact-name']."\r\n";
		$msg .= "Email o telefono: ".$_POST['contact-email']."\r\n";
		$msg .= "Mensaje: ".$_POST['contact-message']."\r\n";
		$msg .= "Dia de consulta: ".$_POST['contact-dia']."\r\n";
		$msg .= "Horario: ".$_POST['contact-hora']."\r\n";
		//$email_to, $email_subject, $email_message, $headers;
		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$_POST['contact-email']."\r\n" ;
		$success = mail($mailTo,"Nueva solicitud de consulta", $msg,$headers);

		if ($success) {
		 echo $successMsg;

		} else {
			echo $errorMsg;
		}





?>

<a href="http://www.alejandrofonz.com">Volver a la pagina</a>
