<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

?>
<?php 
$errores='';
$enviado='';

if (isset($_POST['enviar'])) {
	$nombre=$_POST['Nombres'];
	$apellido=$_POST['Apellidos'];
    $email=$_POST['Email'];
    $tipo=$_POST['tipo'];
    $departamento=$_POST['Departamento'];
    $ciudad=$_POST['ciudad'];
    $mensaje=$_POST['Mensaje'];

  //  $sexo=$_POST['sexo'];
 //   $pais=$_POST['pais'];
 //   $terminos=$_POST['terminos'];

	if (!empty($nombre)) {
		$nombre=trim($nombre);
		$nombre=filter_var($nombre, FILTER_SANITIZE_STRING);
	} else {
		$errores .= 'Por favor ingresa un nombre <br>';
	}

	if (!empty($email)) {
		$email=filter_var($email, FILTER_SANITIZE_EMAIL);

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errores .= 'Por favor ingresa un correo valido <br>';
		} 
	} else { 
		$errores .= 'Por favor ingresa un correo <br>';
	}

	if (!empty($mensaje)) {
		$mensaje=htmlspecialchars($mensaje);
		$mensaje=trim($mensaje);
		$mensaje=stripcslashes($mensaje);
	} else {
		$errores .= 'Por favor ingresa un mensaje <br>';
    }
    






	if (!$errores) {
		$enviar_a='qualaquala0@gmail.com';
		$asunto='quala';
	//	$mensaje_preparado="De: $nombre \n";
	//	$mensaje_preparado="Correo: $correo \n";
	//	$mensaje_preparado="Mensaje: " . $mensaje;

	//	mail($enviar_a, $asunto, $mensaje_preparado);
		$enviado='true';



// Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(true);

		try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  						// Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'qualaquala0@gmail.com';                    // SMTP username
    $mail->Password   = 'quala123';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
  
    $mail->setFrom('qualaquala0@gmail.com');
    $mail->addAddress('qualaquala0@gmail.com');    // Add a recipient



    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $nombre;
		$mail->Body    = 
		$nombre.'<br>'.
	$apellido.'<br>'.
		$email.'<br>'.
		$tipo.'<br>'.
		$departamento.'<br>'.
		$ciudad.'<br>'.
		$mensaje.'<br>'.'<br>'.'<br>'.'<br>' . 'Este mensaje fue enviado por: ' . $email . '<br>'.'<br>';


    $mail->send();
    //echo 'El mensaje ha sido enviado con exito';
} catch (Exception $e) {
	//echo "El mensaje no ha sido enviado . Ha ocurrido un error{$mail->ErrorInfo}";
}



}

}

require 'Contactenos.1.php';





?>
