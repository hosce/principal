<?php
	include('./controller/sala_prensa/funciones_boletines.php');
	$ultimas_noticias = get_ultimas_noticias();
	$tr_noticias='';

	foreach ($ultimas_noticias as $noticia) 
	{
			$nota = strip_tags($noticia['texto']); 
			$nota = explode(" ",$nota);
			$x = 0;
			$resumen = '';
			foreach ($nota as $palabra) 
			{
				if($x <= 30)
				{
					$resumen =  $resumen.$palabra." ";
					$x++;
				}
			}
		$mas = "'view/sala_prensa/ver_boletin.php?id=".$noticia['idboletin']."'";
		
		$back_img_noticia = "'img/boletines/".$noticia['url']."'";

		$tr_noticias.='
							<div class="secondary-z">

								<div class="tertiary-z">

									<div style="margin: auto;">
										<div class="img_ultimas" style="background-image: url('.$back_img_noticia.');"></div>
									</div>

									<div class="r2 ultima">
										<span><b>'.$noticia['titulo'].'</b></span>

										<p>'.$resumen.'...</p>

									</div>

									<div class="r3" style="padding-bottom: 1em !important;">
										<a href="javascript:pagecontent('.$mas.');" class="btn btn-primary">Ver más</a>
									</div>

								</div>
							</div>
						';
	}
	echo $tr_noticias;
?>			