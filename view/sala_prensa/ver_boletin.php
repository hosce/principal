<?php
    include('../../controller/funciones.php'); 
    include('../../model/sala_prensa/fill_content_table.php');
    
    $idboletin = $_GET['id'];
    $nota = fill_content_table_ver_boletin($idboletin);
    $foto = fill_content_table_ver_boletin_fotos($idboletin);
?>
<div class="container">
	<h2 class="sub-title">Boletín</h2>
<ol class="breadcrumb">
  <li><a href="index.php">Inicio</a> /</li>
  <li><a href="javascript:pagecontent('view/sala_prensa/sala_prensa.php');">&nbsp;Sala de Prensa</a></li>
</ol>
<?php


        if($foto['idboletin'] >= 356)
        {
        	$ruta = 'img/boletines/'.$foto['url'];
        }else{
        	$ruta = 'http://jesusmaria.gob.mx/JesusMaria/'.$foto['url'];
        }

echo '
        <h2 id="linea_nota">'.$nota['titulo'].'</h2>
        <small>Boletín '.$nota['numero'].'</small>
        <div class="col-md-12 text-justify">
            <br>
            <div align="center">
                <img class="img-fluid" src="'.$ruta.'" class="thumbnail img_boletin">
            </div>
            <br>
            <p class="text-right"><i>'.formato_fecha($nota['fecha_texto']).'></i></p>
            <br>
                '.$nota['texto'].'
        </div>
        <br>
        <br>
        <br>

        ';
?>
</div>