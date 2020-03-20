<?php
include('../../controller/buzon/funciones_buzon.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$email_institucional = 'contacto.ciudadano@jesusmaria.gob.mx';
$idtipoasunto = $_POST['idtipoasunto'];
$descripcion = utf8_encode($_POST['descripcion']);

if(register_buzon($nombre, $email, $idtipoasunto, $descripcion))
{

		ini_set( 'display_errors', 1 );
		error_reporting( E_ALL );
		$from = "buzon@jesusmaria.gob.mx";
		$to = $email_institucional;
		$subject = "Buzon de Sugerencias del Municipio de Jesus Maria";
		$message = "Se recib赤o desde el portal institucional el siguiente formulario de contacto: \n \n Nombre: ".utf8_encode($nombre)."\n \n Correo electr車nico: ".$email."\n \n Descripci車n: ".utf8_encode($descripcion);
		$headers = "From:" . $from;
		mail($to,$subject,$message, $headers);
		//echo "The email message was sent.";
		
	echo "correcto";
}
else
{
	echo "error";
}
?>