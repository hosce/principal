<?php
	require("../../model/dependencias/fill.php");
	$dependencias = fill_secretarias();
	$tr_dependencias = fill_tr_dependencias($dependencias);
?>

<div class="container">
	
	<h2 class="sub-title">Licitaciones</h2>
	<h4 style="color: grey;">Obras Públicas</h4>
	<br>

	<div class="container frames" style="display: flex; justify-content: center;">		
		<div class="contenedor-flex">
			<?=$tr_dependencias?>
		</div>
	</div>

</div>