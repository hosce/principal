<?php
include('../../controller/funciones.php'); 
include('../../model/fill_content_table.php');
?>
<div class="container">
	<h2 class="sub-title">Buzón de sugerencias</h2>
	<br>
	<p class="text-justify">
	<small>Para atender tu reporte, queja, denuncia o sugerencia, por favor ingresa tu nombre y correo electrónico en el siguiente formulario, para solicitudes de información en materia de Transparencia, por favor dar clic en el siguiente hipervínculo <<b><a href="http://transparencia.jesusmaria.gob.mx/#/" target="_blank">Ir a sitio</a></b>>.</small>
	</p>
	<br>
	<br>

	<form method="post" id="form_buzon">
	  	
	    <div class="form-row">
	    
		    <div class="form-group col-md-6">
		      <label for="nombre">Nombre</label>
		      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresar nombre aquí..." required="true">
		    </div>

		    <div class="form-group col-md-6">
		      <label for="email">Correo Electrónico</label>
		      <input type="email" class="form-control" id="email" name="email" placeholder="Ingresar correo electrónico aquí...">
		    </div>

	    </div>

	    <div class="form-row">

		    <div class="form-group col-md-6">
		    	<label for="idtipoasunto">Tipo de asunto</label>
	      		<select class="form-control" id="idtipoasunto" name="idtipoasunto" required>
	            	<option value="">Seleccionar</option>
	                <option value="1">Reporte</option>
	                <option value="2">Sugerencia</option>
	                <option value="3">Otro</option>
	        	</select>
		  	</div>

		  	<div class="form-group col-md-6">
		        <label for="descripcion">Descripción</label>
	      		<textarea class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese la descripción aquí..."></textarea>
	      		<div style="text-align: center;">
	      			<small><i>
		            	Describir el detalle del asunto, no olvidar mencionar información importante como: el nombre del trámite, la fecha, el lugar y dependencia.
		        	</i></small>
	      		</div>
		    </div>

	    </div>	

	    <div class="form-row">
			<div class="form-group" style="margin: auto; padding-bottom: 10px;" >
		        <button type="submit" class="btn btn-primary">Enviar</button>
		  	</div>
	    </div>
	  
	</form>
	
</div>


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
