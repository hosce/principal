<?php
include('../../controller/exe_tramites.php');

function compare_tramite($clave, $id_secretaria)
{
	$sql = "SELECT id
				FROM tramites
				WHERE clave ='".$clave."' AND id_secretaria = $id_secretaria";
	$result = query_row_id($sql);

	return $result;
}

function create_tramite($nombre_tramite,$id_secretaria, $clave, $usuarios, $obtiene, $costo, $tiempo, $vigencia)
{
	$sql = "INSERT INTO tramites (nombre,id_secretaria, clave, usuarios, documento_obtenido, costo, tiempo, vigencia)
					VALUES('".$nombre_tramite."', '".$id_secretaria."', '".$clave."', '".$usuarios."', '".$obtiene."', '".$costo."', '".$tiempo."', '".$vigencia."')";

	$result = query_last_id($sql);

	return $result;
}

function update_tramite_paso1($nombre_tramite, $clave, $usuarios, $obtiene, $costo, $tiempo, $vigencia, $id_tramite)
{
	$sql = "UPDATE tramites SET nombre = '".$nombre_tramite."', clave = '".$clave."', usuarios = '".$usuarios."', documento_obtenido = '".$obtiene."', costo = '".$costo."', tiempo = '".$tiempo."', vigencia = '".$vigencia."'
			WHERE id = $id_tramite";
	$result = querys($sql);

	return $result;
}

function update_tramite_paso2($receptora, $domicilio, $telefono, $horario, $resolucion, $email,$id_tramite)
{
	$sql = "UPDATE tramites SET oficina = '".$receptora."', domicilio = '".$domicilio."', telefono = '".$telefono."', horario = '".$horario."', resolucion = '".$resolucion."', email = '".$email."'
			WHERE id = $id_tramite";
	$result = querys($sql);

	return $result;	
}

function update_tramite_paso4($id_tramite, $observaciones, $fundamento)
{
	$sql = "UPDATE tramites SET observaciones = '".$observaciones."', fundamento = '".$fundamento."'
			WHERE id = $id_tramite";
	$result = querys($sql);

	return $result;		
}

function get_tramites_secretaria($id_secretaria)
{
	$sql = "SELECT t.id,t.nombre, s.secretaria, t.documento_obtenido, t.telefono
				FROM tramites AS t, secretarias As s
			WHERE t.id_secretaria = $id_secretaria AND s.id = $id_secretaria";

	$result = querys($sql);

	return $result;
}

function get_detalle_tramite($id)
{
	$sql = "SELECT s.id, s.secretaria, s.titular, t.nombre, t.usuarios, t.clave, t.documento_obtenido, t.costo, t.tiempo, t.vigencia, t.observaciones, t.oficina, t.domicilio, t.telefono, t.horario, t.resolucion, t.email, t.observaciones, t.fundamento
				FROM secretarias AS s, tramites AS t
			WHERE t.id = $id AND t.id_secretaria = s.id";

	$result = query_row_id($sql);

	return $result;
}
function get_requisitos_tramite($id_tramite)
{
	$sql = "SELECT id, requisito, documento, original, copia
				FROM requisitos
			WHERE id_tramite = $id_tramite";

	$result = querys($sql);

	return $result;
}

function get_requisito($id)
{
	$sql = "SELECT requisito, documento, original,copia
				FROM requisitos
			WHERE id = $id";

	$result = query_row_id($sql);

	return $result;
}