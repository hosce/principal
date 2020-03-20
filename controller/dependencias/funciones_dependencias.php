<?php

function get_secretarias()
{
	include('./controller/exe_tramites.php');
	$sql="SELECT id, secretaria
			FROM secretarias
			WHERE status = 1";

	$result = querys($sql);

	return $result;
}

function get_dependencias()
{
	include('../../controller/exe_tramites.php');
	$sql="SELECT id, secretaria
			FROM secretarias
			WHERE status = 1";

	$result = querys($sql);

	return $result;
}

function get_tramites_dependencia($id_dependencia)
{
	include('../../controller/exe_tramites.php');
	$sql ="SELECT t.id, t.nombre, s.secretaria, t.documento_obtenido, t.telefono
				FROM tramites AS t, secretarias AS s
			WHERE t.id_secretaria = $id_dependencia AND s.id = $id_dependencia";

	$result = querys($sql);

	return $result;
}