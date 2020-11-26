<?php
$hostname_conexion = "localhost";  //conexion al hosting
/*$database_conexion = "web2";  //nombre de la base de datos
$username_conexion = "root"; //nombre de usuario
$password_conexion = "";  //clave de usuario*/
$database_conexion = "principal";  //nombre de la base de datos
$username_conexion = "root"; //nombre de usuario
$password_conexion = "";  //clave de usuario

$conexion = mysqli_connect($hostname_conexion, $username_conexion, $password_conexion,$database_conexion);
if(!$conexion)
{
	$mensaje = date('Y-m-d H:m:s')."Error: No se pudo conectar a MySQL." . PHP_EOL."\n"
				."errno de depuracion: " . mysqli_connect_errno() . PHP_EOL."\n"
    			."error de depuracion: " . mysqli_connect_error() . PHP_EOL;

    
	$file_name="logs/BD/".date("Y-m-d")." Error-BD.TXT";
    if(!file_exists($file_name));
    	$file_load= fopen($file_name, "a");
    	fwrite($file_load, $mensaje);
    	exit;
	}
	else
	{
 		mysqli_query($conexion,"SET NAMES 'utf8'"); 						
	}
	
	if(!isset($_SESSION)) 
    { 
        @session_start(); 
    }
?>