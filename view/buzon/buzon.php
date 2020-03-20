<?php
include('../../controller/funciones.php'); 
include('../../model/fill_content_table.php');
?>
<h2 id="linea_gris">Buzón de sugerencias</h2>
<br>
<p class="text-justify">
<small>Para atender tu reporte, queja, denuncia o sugerencia, por favor ingresa tu nombre y correo electrónico en el siguiente formulario, para solicitudes de información en materia de Transparencia, por favor dar clic en el siguiente hipervínculo <<b><a href="http://transparencia.jesusmaria.gob.mx/#/" target="_blank">Ir a sitio</a></b>>.</small>
</p>
<br>
<br>
<form class="form-horizontal" method="post" id="form_buzon" style="text-align:justify">
    <div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Nombre:</label>
        <div class="col-sm-10">
			<input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
	</div>
    
    <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">Email:</label>
    	<div class="col-sm-10">
      		<input type="email" class="form-control" id="email" name="email">
    	</div>
  	</div>
    
    <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">Tipo de asunto:</label>
    	<div class="col-sm-10">
      		<select class="form-control" id="idtipoasunto" name="idtipoasunto" required>
            	<option value="">Seleccione</option>
                <option value="1">Reporte</option>
                <option value="2">Sugerencia</option>
                <option value="3">Otro</option>
        	</select>
    	</div>
  	</div>
    
    <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">Descripción:</label>
    	<div class="col-sm-10">
      		<textarea class="form-control" id="descripcion" name="descripcion"></textarea>
            <small><i>
            Describa el detalle de su asunto, no olvide mencionar información importante como: el nombre del trámite, la fecha, el lugar y dependencia.</i></small>
    	</div>
  	</div>

    
    <div class="form-group text-center">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>


<script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
<script src="https://code.jquery.com/jquery-1.12.1.js"></script>
<script src="jquery-ui-1.12.1/jquery-ui.js"></script>

<script src="js/jquery.validate.min.js"></script>
<script src="funciones/funciones.js"></script>

<script>
$("#form_buzon").validate(
{
  	success: "valid",
  	rules: 
		{
			nombre: {
				required: true,
				minlength: 10
			},

			email: {
				required: true
			},
			
			idtipoasunto: {
				required: true
			},
			
			descripcion: {
				required: true,
				minlength: 10
			}
		},
	messages: 
		{
			nombre: {
				required: "Ingresar nombre del solicitante.",
				minlength: "Nombre demasiado corto."	
			},

			email: {
				required: "Ingresar correo electrónico."
			},
			
			idtipoasunto: {
				required: "Seleccionar asunto."
			},
			
			descripcion: {
				required: "Ingresar descripción.",
				minlength: "Descripción deemasiado corta."
			},
		},
		
  	submitHandler: function()
  	{
		//alert("Submitted!");
		var parametros = 
		{		               
			"nombre" : $('#nombre').val(),
			"email" : $('#email').val(),
			"idtipoasunto" : $('#idtipoasunto').val(),
			"descripcion" : $('#descripcion').val(),
		};
		
		$.ajax(
			{
					data:  parametros,
					url:   '../../model/buzon/register_buzon.php',
					type:  'post',
					
					success:  function (data) 
					{
						var datadiv = data.split(",", 5);
							var mensaje = datadiv[0];
							/*var para1 = datadiv[1];
							var para2 = datadiv[2];
							var para3 = datadiv[3];							
							var para4 = datadiv[4];	
							var para5 = datadiv[5];	*/
															
								if (mensaje=='correcto')
								{
									alert('Formulario Registrado');
									window.location="index.php";
								}
							
								if (mensaje=='error')
								{
									alert('Error');
								}
					}
			});
  	}
});
</script>