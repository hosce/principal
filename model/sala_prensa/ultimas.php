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
						
		$tr_noticias.='
							<div class="secondary-z">

								<div class="tertiary-z">

									<div>
										<img src="img/boletines/'.$noticia['url'].'" class="img-fluid">
									</div>

									<div class="r2">
										<span><b>'.$noticia['titulo'].'</b></span>

										<p>'.$resumen.'...</p>

									</div>

									<div class="r3">
										<a href="javascript:pagecontent('.$mas.');" class="btn btn-primary">Ver más</a>
									</div>

								</div>
							</div>
						';
	}
	echo $tr_noticias;
?>			