<?php
	require("../../model/dependencias/fill.php");
	$dependencias = fill_dependencias();
	$tr_dependencias = fill_tr_dependencias($dependencias);
?>
<br>
<div class="dependencias">
	<div class="d-title">
		<span>Dependencias</span>	
	</div>
	<br>
	<div class="container" style="display: flex; justify-content: center;">
		<div class="contenedor-flex">
			<?=$tr_dependencias?>
		</div>
	</div>
	<br>
</div>

<div id="load_modal_dependencias"></div>
<div id="load_modal_info"></div>