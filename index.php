<?php
	require("./model/dependencias/fill.php");
	$dependencias = fill_secretarias();
	$tr_dependencias = fill_tr_dependencias($dependencias);
	$tr_dependencias_table = fill_tr_dependencias_table($dependencias);
	require("./model/banners/fill.php");
	$banners = fill_banner();
	$tr_banner = fill_tr_banner($banners);
?>
<!DOCTYPE html>
<html style="background: black;">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Presidencia Municipal de Jesús María</title>
    
    <link rel="icon" href="img/logo/jm.ico">

	<link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./assets/fontawesome/css/all.css">

	<link rel="stylesheet" type="text/css" href="./assets/css/index.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/main-header.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/main-content.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/main-footer.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/submenus.css">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129023585-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-129023585-1');
	</script>
	
</head>
<body>

	<div class="cabezal">
		<!--<img src="./assets/img/cerro.jpg" class="back1">-->
		<div class="imagen">
			<div>
				<img src="./assets/img/fondo.png">
				<a href="index.php"><img src="./assets/img/logo_2020.png" class="escudito"></a>
			</div>
		</div>

		<div class="mapa">
			<nav class="navbar navbar-expand-cu navbar-cu">
			  
			  <button class="navbar-toggler bjm-menu" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			    <span><i class="fas fa-bars"></i></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNavDropdown">
			    <ul class="navbar-nav navbar-nav-cu">
			      <li class="nav-item active">
			        <a class="nav-link bjm" href="index.php">Inicio<span class="sr-only">(current)</span></a>
			      </li>

			      <li class="nav-item dropdown">
			        <a class="nav-link bjm dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          ¡Mi orgullo, mi gente!
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          <a class="dropdown-item" href="javascript:pagecontent('view/miorgullomigente/historia.php');">Historia</a>
			          <a class="dropdown-item" href="javascript:pagecontent('view/miorgullomigente/escudo.php');">Escudo</a>
			          <a class="dropdown-item" href="javascript:pagecontent('view/miorgullomigente/datos_relevantes.php');">Datos Relevantes</a>
			          <a class="dropdown-item" href="javascript:pagecontent('view/miorgullomigente/vision.php');">Visión</a>
			          <a class="dropdown-item" href="javascript:pagecontent('view/miorgullomigente/mision.php');">Misión</a>
			          <a class="dropdown-item" href="javascript:pagecontent('view/miorgullomigente/valores_principios.php');">Valores y Principios</a>
			        </div>
			      </li>

			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle bjm" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Gobierno
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          <a class="dropdown-item" href="estaticos/2020/plan/Plan_de_Desarrollo_municipal_JM_2019-2021.pdf" target="_blank">Plan de Desarrollo Municipal 2019-2021</a>
			          <a class="dropdown-item" href="javascript:pagecontent('view/gobierno/cabildo.php');">Cabildo</a>
			          <a class="dropdown-item" href="javascript:pagecontent('view/gobierno/gabinete.php');">Gabinete</a>
			          <a class="dropdown-item" href="estaticos/2020/mir/MIR2020.PDF" target="_blank">Matriz de Indicadores de Resultados</a>
			          <a class="dropdown-item" href="javascript:pagecontent('view/gobierno/directorio.php');">Directorio</a>
			          <a class="dropdown-item" href="javascript:pagecontent('view/sala_prensa/sala_prensa.php');">Sala de Prensa</a>
			        </div>
			      </li>

			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle bjm" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Trámites en línea
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          <a class="dropdown-item" href="http://jesusmaria.siifg.net/SIIFG/predial.jsp">Pago de Predial</a>
			          <a class="dropdown-item" href="javascript:pagecontent('view/tramites_linea/dependencias.php');">Dependencias</a>
			          <a class="dropdown-item" href="javascript:pagecontent('view/tramites_linea/cartografia.php');">Cartografía</a>
			        </div>
			      </li>

			      <li class="nav-item">
			        <a class="nav-link bjm" href="http://turismo.jesusmaria.gob.mx/" target="_blank">Turismo</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link bjm" href="http://transparencia.jesusmaria.gob.mx/#/" target = "_blank">Transparencia</a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle bjm" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Consulta Evaluación
			        </a>
			        <div class="dropdown-menu evaluacion" aria-labelledby="navbarDropdownMenuLink">
			          <a class="dropdown-item" href="http://aguascalientes.gob.mx/cplap/Docs/IMCO/2019/Externas/FISM/JESUS_MARIA/03_ASM_2018_Jesus_Maria_FISM.pdf" target="_blank">Acciones Susceptibles a Mejora</a>
			        </div>
			      </li>
			    </ul>
			  </div>
			</nav>
		</div>

		

		<div class="redes">
			<a href="https://es-la.facebook.com/JesusMariaMunicipio/" class="rsa" target="_blank"><i class="fab fa-facebook"></i></a>
			<a href="https://www.instagram.com/jesusmaria_municipio/" class="rsa" target="_blank"><i class="fab fa-instagram"></i></a>
			<a href="https://twitter.com/Jesus_Maria_" class="rsa" target="_blank"><i class="fab fa-twitter"></i></a>
			<a href="https://www.youtube.com/channel/UCsrgM_afF4yD2xLY8y3fC_g" class="rsa" target="_blank"><i class="fab fa-youtube"></i></a>
		</div>
	</div>

	<div id="main_content">

		<div id="carouselExampleControls" style="margin-top: 0px;" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		  	<?=$tr_banner?>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<br>
		<div class="dependencias">

			<div class="d-title">
				<span>Dependencias</span>	
			</div>

			<br>
			<div class="container frames" style="display: flex; justify-content: center;">
				
				<div class="contenedor-flex">
					<?=$tr_dependencias?>
				</div>
			</div>

			<div class="drop_table">

				<div class="div_label" onclick="$('.hov-cursor').toggle();">

					<div class="label_dependencias">
						<a role="button" class="btn btn-light">Mostrar/Ocultar Dependencias <i class="fas fa-caret-down"></i></a>
					</div>
					
				</div>
					
				<table class="table table-striped hov-cursor" >
					<br>
				  <tbody>
				    <?= $tr_dependencias_table ?>
				  </tbody>
				</table>		
			</div>

			<br>

		</div>



		<div id="load_modal_dependencias"></div>
		<div id="load_modal_info"></div>

		<div class="logos">
			<a href="https://es-la.facebook.com/JesusMariaMunicipio/" target="_blank">
				<img src="./assets/img/jm_ch.png" class="img-fluid">
			</a>

			<a href="https://es-la.facebook.com/JesusMariaDIF/" target="_blank">
				<img src="./assets/img/dif.png" class="img-fluid">
			</a>

			<a href="http://turismo.jesusmaria.gob.mx/" target="_blank">
				<img src="./assets/img/turismo.png" class="img-fluid">	
			</a>
		</div>

		<div class="content-a">

			<a href="javascript:pagecontent('view/sala_prensa/sala_prensa.php');">
				<div class="a-title">
					<span>Sala de Prensa</span>	
				</div>
			</a>	
			<div class="a-mainflex">
				<?php require('./model/sala_prensa/ultimas.php');?>
			</div>
		</div>		
		
		<!--<div class="content-b">
			<div class="b-title">
				<span>!Entérate de nuestros próximos eventos!</span>
			</div>

			<div class="anuncios">
				<div class="carro">
					<div>
						<img src="./assets/img/reyes.jpg">	
					</div>

					<div >
						<img src="./assets/img/visual.jpg">
					</div>

					<div>
						<img src="./assets/img/reyes.jpg">
					</div>
				</div>
			</div>
		</div>-->
	
	</div>

	<div class="pre-footer">
		
		<div class="emblem">
			<a href="index.php">
				<img src="./assets/img/jml_miniC.png">
			</a>
		</div>

		<div class="mapa">
			<div>
				<div>
					<a href="index.php">Inicio</a>
				</div>
			</div>

			<div>
				<div>
					<span>¡Mi orgullo, mi gente!</span>
					<ul>
						<a href="javascript:pagecontent('view/miorgullomigente/historia.php');">
							<li>Historia</li>
							
						</a>

						<a href="javascript:pagecontent('view/miorgullomigente/escudo.php');">
							<li>Escudo</li>
							
						</a>

						<a href="javascript:pagecontent('view/miorgullomigente/datos_relevantes.php');">
							<li>Datos Relevantes</li>
							
						</a>

						<a href="javascript:pagecontent('view/miorgullomigente/vision.php');">
							<li>Visión</li>
							
						</a>

						<a href="javascript:pagecontent('view/miorgullomigente/mision.php');">
							<li>Misión</li>
							
						</a>

						<a href="javascript:pagecontent('view/miorgullomigente/valores_principios.php');">
							<li>Valores y Principios</li>
							
						</a>
					</ul>
				</div>
			</div>

			<div>
				<div>
					<span>Gobierno</span>
					<ul>
						<a href="estaticos/2020/plan/Plan_de_Desarrollo_municipal_JM_2019-2021.pdf" target="_blank">
							<li>PDM 2019-2021</li>
							
						</a>
						
						<a href="javascript:pagecontent('view/gobierno/cabildo.php');">
							<li>Cabildo</li>
							
						</a>

						<a href="javascript:pagecontent('view/gobierno/gabinete.php');">
							<li>Gabinete</li>
							
						</a>

						<a href="javascript:pagecontent('view/gobierno/directorio.php');">
							<li>Directorio</li>
							
						</a>
						<a href="javascript:pagecontent('view/buzon/buzon.php');">
							<li>Buzón de sugerencias</li>
							
						</a>
					</ul>
				</div>
			</div>
				
			<div>
				<div>
					<span>Trámites en línea</span>
					<ul>
						<a href="http://jesusmaria.siifg.net/SIIFG/predial.jsp" target="_blank">
							<li>Predial</li>
							
						</a>

						<a href="javascript:pagecontent('view/tramites_linea/dependencias.php');">
							<li>Dependencias</li>
							
						</a>

						<a href="javascript:pagecontent('view/tramites_linea/cartografia.php');">
							<li>Cartografía</li>
							
						</a>
					</ul>
					
				</div>
			</div>

			<div>
				<div>
					<a href="http://turismo.jesusmaria.gob.mx/" target="_blank">Turismo</a>
				</div>
			</div>

			<div>
				<div>
					<a href="http://transparencia.jesusmaria.gob.mx/#/" target="_blank">Transparencia</a>
				</div>
			</div>

			<div>
				<div>
					<span>Consulta Evaluación</span>
					<ul>
						<a href="http://aguascalientes.gob.mx/cplap/Docs/IMCO/2019/Externas/FISM/JESUS_MARIA/03_ASM_2018_Jesus_Maria_FISM.pdf">
							<li>Acciones susceptibles de mejora</li>
						</a>
					</ul>
					
				</div>
			</div>	
		</div>

		<div class="social">
			<a href="https://es-la.facebook.com/JesusMariaMunicipio/" role="button" target="_blank"><i class="fab fa-facebook"></i></a>
			<a href="https://www.instagram.com/jesusmaria_municipio/" role="button" target="_blank"><i class="fab fa-instagram"></i></a>
			<a href="https://twitter.com/Jesus_Maria_" role="button" target="_blank"><i class="fab fa-twitter"></i></a>
			<a href="https://www.youtube.com/channel/UCsrgM_afF4yD2xLY8y3fC_g" role="button" target="_blank"><i class="fab fa-youtube"></i></a>
		</div>
	</div>

	<div class="footer" style="padding-top: 10px; padding-bottom: 10px;">
		<div>
			<p>Municipio de Jesús María 2019 - 2021</p>
			<p>Coordinación de Innovación Tecnológica &middot; Copyleft &#127279; 2017 &middot; Derechos Reservados</p>
			<p>Calle Emiliano Zapata No. 109 - Colonia Centro, Jesús María, Aguascalientes - C.P. 20920</p>
		</div>
	</div>

	<!--COMIENZAN LOS SCRIPTS-->
	<script type="text/javascript" src="./assets/jquery/jquery-3.4.1.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script type="text/javascript" src="./assets/bootstrap/js/bootstrap.js"></script>
	
	<script type="text/javascript" src="./assets/fontawesome/js/all.js"></script>

	<script type="text/javascript">

		function pagecontent(page){
			$("#main_content").load(page);
		}

		function tramites(div){
			var id = $(div).attr("id");
			
			 $.ajax({
		        url: "./view/tramites_linea/dependencias.php",
		        type:"POST",
		        processData:false,
		        contentType: false,
		        data: id,
		      });
		}


		function fill_modal_dependencias(id_dependencia){

	        var xmlhttp;

	        if (window.XMLHttpRequest){
	            // code for IE7+, Firefox, Chrome, Opera, Safari
	            xmlhttp=new XMLHttpRequest();
	        }
	        
	        else{// code for IE6, IE5
	            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	        }

	        xmlhttp.onreadystatechange=function(){
	            
	            if (xmlhttp.readyState==4 && xmlhttp.status==200){
	                //document.getElementById("loading").innerHTML = ''; // Hide the image after the response from the
	                document.getElementById("load_modal_dependencias").innerHTML=xmlhttp.responseText;
	                //waitingDialog.hide();
	                $('#modal_dependencia').modal('show');
	                tablas();

	            }
	        }

	        id = $(id_dependencia).attr("id");
	        var datos_modal = "id_dependencia="+id;

	        //waitingDialog.show('Cargando Información', {dialogSize: 'sm', progressType: 'warning'})
	        xmlhttp.open("POST","./model/dependencias/modal_dependencias.php",true);
	        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	        xmlhttp.send(datos_modal);

	    }	 

	    function fill_modal_info(id_tramite){
			var xmlhttp;

	        if (window.XMLHttpRequest){
	            // code for IE7+, Firefox, Chrome, Opera, Safari
	            xmlhttp=new XMLHttpRequest();
	        }
	        
	        else{// code for IE6, IE5
	            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	        }

	        xmlhttp.onreadystatechange=function(){
	            
	            if (xmlhttp.readyState==4 && xmlhttp.status==200){
	                //document.getElementById("loading").innerHTML = ''; // Hide the image after the response from the
	                document.getElementById("load_modal_info").innerHTML=xmlhttp.responseText;
	                //waitingDialog.hide();
	                $('#modal_info').modal('show');
	                modales_abrir_cerrar();
	            }
	        }

	        
	        var datos_modal = "id_tramite="+id_tramite;

	        //waitingDialog.show('Cargando Información', {dialogSize: 'sm', progressType: 'warning'})
	        xmlhttp.open("POST","./model/dependencias/modal_info.php",true);
	        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	        xmlhttp.send(datos_modal);

	    }

	    function modales_abrir_cerrar(){

	    	$('#modal_info').on('shown.bs.modal', function (e) {
				$('#modal_dependencia').modal('toggle');
			});

			$('#modal_info').on('hidden.bs.modal', function (e) {
				$('#modal_dependencia').modal('toggle');
			});
		}	

	</script>

	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

	<script type="text/javascript">
		function tablas(){
			$(document).ready( function () {
			    $('#table_dependencias').DataTable();
			});
		}
	</script>

	<script type="text/javascript" src="./assets/js/box_height.js"></script>
	<script type="text/javascript" src="./assets/js/droptoggle.js"></script>


</body>
</html>
