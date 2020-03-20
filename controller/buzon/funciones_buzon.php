<?php
///PARA VER LOS ERRORES DE PHP COMENTAR LA SIGUIENTE LINEA
//error_reporting(0);
//////////////////////////////Inicio Funciones Programa
function register_buzon($nombre, $email, $idtipoasunto, $descripcion)
{
	include('../../controller/conexion.php');
	$query = "INSERT INTO buzon(nombre, correo, idtipoasunto, descripcion, fecha, hora) VALUES ('$nombre', '$email', '$idtipoasunto', '$descripcion', Now(), Now())";
	//echo $query;
	$result = mysqli_query($conexion,$query);
	
	return($result);
}
//////////////////////////////Fin Funciones Programa
?>