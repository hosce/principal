<?php
function fill_banner()
{
	include("./controller/banners/funciones_banners.php");
	$banners = get_banners();

	return $banners;
}

function fill_tr_banner($banners)
{
	$tr_banners = "";
	$active = "active";
	foreach ($banners as $banner) 
	{
	    if($banner['target'])
	    {
	        $target = "target = '_blank'";
	    }else{
	        $target = "";
	    }
	    
		if($banner['url']!= "")
		{
			$tr_banners.='
						<div class="carousel-item '.$active.'" >
					    	<a href="'.$banner['url'].'" '.$target.'>
					    	  <img class="banner-img"  src=".'.$banner['imagen'].'">
					    	</a>
					    </div>
					';	
		}else{
			$tr_banners.='
						<div class="carousel-item '.$active.'">					
					    	  <img class="banner-img"  src=".'.$banner['imagen'].'">					
					    </div>
					';	
		}
		$active ="";
	}
	return $tr_banners;
}