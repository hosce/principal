<?php
///////////////////////////////////////////////Videos
function fill_content_table_ver_videos_portada()
{
	include('controller/funciones_videos.php');
	$result = get_ver_videos_portada();
					
	return($result);
}

function fill_content_table_ver_videos()
{
	include('../../controller/funciones_videos.php');
	$result = get_ver_videos();
					
	return($result);
}

///////////////////////////////////////////////Banners
function fill_content_table_ver_cantidad_banners()
{
	include('controller/funciones_banners.php');
	$result = get_ver_cantidad_banners();
					
	return($result);
}

function fill_content_table_ver_banners()
{
	include('controller/funciones_banners.php');
	$result = get_ver_banners();
	
	return($result);
}

///////////////////////////////////////////////Boletines
function fill_content_table_ver_boletines()
{
	include('controller/sala_prensa/funciones_boletines.php');
	$result = get_ver_boletines();
	
	return($result);
}

function fill_content_table_ver_todos_boletines($anio)
{
	include('controller/sala_prensa/funciones_boletines.php');
	$result = get_ver_todos_boletines($anio);
	
	return($result);
}

function fill_content_table_ver_boletin($idboletin)
{
   
	include('../../controller/sala_prensa/funciones_boletines.php');
	$result = get_ver_boletin($idboletin);
	
	return($result);
}

function fill_content_table_ver_boletin_fotos($idboletin)
{
    $result = get_ver_boletin_fotos($idboletin);
	
	return($result);
}

///////////////////////////////////////////////Tramites
function fill_content_aco_ver_tramites()
{
	include('../../controller/funciones_tramites.php');
	$result = get_tramites_cantidad_area();
	
	return($result);
}

function fill_content_ver_dependencias_tramites($idsecretaria)
{
	include('../../controller/funciones_tramites.php');
	$result = get_dependencia_tramites_cantidad_area($idsecretaria);
	
	return($result);
}

function fill_content_ver_tramites_area($idsecretaria, $idarea)
{
	//include('../../controller/funciones_tramites.php');
	$result = get_tramites_por_area($idsecretaria, $idarea);
	
	return($result);
}

function fill_content_ver_tramite_detalle($idtramite)
{
	include('../../controller/funciones_tramites.php');
	$result = get_tramite_detalle($idtramite);
	
	return($result);
}

function fill_content_table_ver_tramitescita()
{
	include('../../controller/funciones_tramites.php');
	$result = get_tramites_cita();
	
	return($result);
}

function fill_content_table_ver_informacion_tramite($idtramite)
{
	include('../../controller/funciones_tramites.php');
	$result = get_informacion_tramite($idtramite);
	
	return($result);
}

///////////////////////////////////////////////Gabinete
function fill_content_table_ver_directorio()
{
	include('../../controller/funciones_dependencias.php');
	$result = get_directorio();
	
	return($result);
}

function fill_content_table_ver_gabinete()
{
	include('../../controller/funciones_dependencias.php');
	$result = get_ver_gabinete();
	
	return($result);
}

function fill_content_table_ver_dependencias()
{
	include('../../controller/funciones_dependencias.php');
	$result = get_ver_dependencias();
	
	return($result);
}

function fill_content_table_ver_dependencias_des()
{
	//include('../../controller/funciones_dependencias.php');
	$result = get_ver_dependencias_des();
	
	return($result);
}

function fill_content_table_ver_delegaciones()
{
	$result = get_ver_delegaciones();
	
	return($result);
}


function fill_content_ver_dependencia_titular_detalle($idsecretaria)
{
	include('../../controller/funciones_dependencias.php');
	$result = get_ver_dependencia_titular_detalle($idsecretaria);
	
	return($result);
}

function fill_content_ver_dependencia_detalle($idsecretaria)
{
	//include('../../controller/funciones_dependencias.php');
	$result = get_ver_dependencia_detalle($idsecretaria);
	
	return($result);
}

///////////////////////////////////////////////Cabildo
function fill_content_table_ver_cabildo()
{
	include('../../controller/funciones_cabildo.php');
	$result = get_ver_cabildo();
	
	return($result);
}
?>
