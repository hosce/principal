<?php
include('../../controller/exe_tramites.php');

function create_requisito($requisito, $original, $copia, $id_tramite, $link)
{
	$sql = "INSERT INTO requisitos(id_tramite, requisito, documento, original, copia)
							VALUES(".$id_tramite.",'".$requisito."','".$link."',".$original.",".$copia.")";

	$result = querys($sql);

	return $result;
}

function edit_requisito($id, $requisito, $original, $copia)
{
	$sql = "UPDATE requisitos SET  requisito = '".$requisito."', original = ".$original.", copia =".$copia." WHERE id = ".$id;

	$result = querys($sql);

	return $result;
}

function update_requisito_link($id_requisito, $link)
{
	$sql = "UPDATE requisitos SET  requisito = '".$link."' WHERE id_requisito = ".$id_requisito;

	$result = querys($sql);

	return $result;	
}