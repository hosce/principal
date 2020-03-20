<?php
	include("../../controller/tramites/funciones_tramites.php");
	function detalle_tramite($id)
	{
        $detalle_tramite = get_detalle_tramite($id);
        
        return $detalle_tramite;
	}
	
	function fill_requisitos($id_tramite)
	{
	    $requisitos_tramite = get_requisitos_tramite($id);
        
        return $requisitos_tramites;
	}