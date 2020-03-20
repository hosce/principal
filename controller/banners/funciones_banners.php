<?php

function get_banners()
{
	require('./controller/conexion.php');
	
	$query = "SELECT imagen, url, target
				FROM banners
			  WHERE estado = 1";
	
	$result = mysqli_query($conexion,$query);
	return($result);
}