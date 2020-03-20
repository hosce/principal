<?php
include('../../controller/sala_prensa/funciones_boletines.php');
function fill_content_table_ver_boletines()
{	
	$result = get_ver_boletines();
	
	return($result);
}

function fill_content_table_ver_todos_boletines($anio)
{
	
	$result = get_ver_todos_boletines($anio);
	
	return($result);
}