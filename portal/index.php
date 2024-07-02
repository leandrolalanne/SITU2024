<?php include ("./include/head.php");?>

<main role="main">
	<section id="buscador">
		<div class="container">
			<div id="buscar" class="row h-100">
				<div class="col-xs-12 col-md-12 my-auto">
					<h6>Sistema de Información Territorial Unificado</h6>
					<!--div class="input-group">
						<input id="searchword" type="text" value="" name="searchword" class="inputbox">                		
						<span class="input-group-btn">
							<button id="botbuscar" class="btn btn-primary" type="submit" onclick="buscar()">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
							</button>				
						</span>
					</div--> 
					<div class="input-group mb-3">
						<input id="searchword" type="text" value="" name="searchword" class="form-control" placeholder="Buscar mapas, geoservicios, archivos y más..." aria-label="Buscar mapas, geoservicios, archivos y más..." aria-describedby="button-addon">
						<div class="input-group-append">
							<button id="botbuscar" class="btn btn-outline-secondary" type="submit" onclick="buscar()"><i class="fas fa-search"></i></button>
						</div>
					</div>
				<input type="hidden" id="url" value="">
				</div>
			</div>
		</div>
		<div id="Informacion"></div>	
	</section>
	
	<section id="informacion">
		<div class="container">
			<div id="info" class="h-100 info">
				<div class="recuadro">
					<div class="info_bolanta">Lo que necesitas saber</div>
					<div id="info_title">¿Qué es el Sistema de Información Territorial Unificado?</div>
					<input type="hidden" id="bot" value="">
					<div id="info_mas">
						<a id="bot_sabermas"onclick="sabermas();">Quiero saber más <b> &#8213&#8213&#9656 </b></a>						
					</div>
					<div id="info_texto" style="display: none;">El SITU es una herramienta digital construida sobre la base de un Sistema de Información Geográfica (SIG), que centraliza, sistematiza y procesa la información producida dentro de toda la estructura estatal provincial para construir un territorio documentado.</div>
				</div>
				
					<?php 
					$link = 'https://www.youtube.com/watch?v=y1J2rJdFCss'; //https://www.youtube.com/watch?v=-LRLV8snA9U  --//https://i2.ytimg.com/vi/-LRLV8snA9U/hqdefault.jpg			
					$thumbnail = str_replace('https://www.youtube.com/watch?v=', "", $link);
					$imagen = 'https://i2.ytimg.com/vi/'.$thumbnail.'/hqdefault.jpg';
					?>
					<a data-fancybox href="<?php echo $link ?>&amp;autoplay=1&amp;rel=0&amp;fs=1&amp;showinfo=0&amp;modestbranding=1">							
						<div id="video" class="video row h-100">
							<div id="boton_play" class="boton_play my-auto"></div>
						</div>
					</a>
				
			</div>
		</div>	
	</section>
	
		<section id="sabermas" class="cerrado">
			<div class="texto">
				<div id="modulo1">
					<div class="container">
						<div class="row h-100">
							<div class="row col-xs-12 col-md-12 my-auto fondogris">
								<div class="col-xs-12 col-md-6 titulo">
									El acceso a la información<br>
									<b class="celeste">es un derecho.</b>
								</div>
								<div class="col-xs-12 col-md-6">
									Un mapa interactivo de uso público que permite acceder a las diferentes líneas de acción llevadas adelante por el Estado, con el objeto de dar conocimiento de ellas a los ciudadanos de Santa Cruz, aportando a la construcción de un gobierno para todos.
								</div>
									
							</div>
						</div>
					</div>
				</div>
				<div id="modulo2">
					<div class="container">
						<div class="row h-100">
							<div class="row col-xs-12 col-md-12 my-auto fondogris">
								<div class="col-xs-12 col-md-6  titulo">
									Clase de datos que podes<br>
									<b class="celeste">buscar en SITU.</b>
								</div>
								<div class="col-xs-12 col-md-6">
									<b>Datos de gestión</b><br>
									Inversión mensual en mantenimiento e insumos de un hospital.<br><br>

									<b>Datos estadísticos</b><br>
									Cantidad de camas del hospital.<br><br>

									<b>Datos con posición geográfica</b><br>
									Dirección del hospital, cuartel de bomberos o comisarias.


								</div>
							</div>
						</div>
					</div>			
				</div>
			</div>			
				
		</section>	
			
	
	<section id="banner1">
		<div class="container">
			<div class="row justify-content-md-center text-center">
				<div class="col-xs-12 col-md-12 img">
					<p class="pantalla align-middle  my-auto " style="text-align: center;color: #0000005c;">Banner para la home de gobierno<br>1110 x 115px</p>
					<p class="celular align-middle  my-auto " style="text-align: center;color: #0000005c;">Banner para la home de gobierno<br>335 x 115px</p>
				</div>			
			</div>
		</div>
	</section>
	<div id="Servicios">-</div>	
	<section id="servicios"><!--&#8213&#9656 -->
		<div class="container">
			<div class="row col-xs-12 h-100">
				<div class="col-xs-12 col-md-4 my-auto">
					<div id="recuadro1" class="recuadro">
						<div class="iconos">
							<img src="img/ico-visualizador.png">
						</div>
						<h2 class="serv_title">Visualizador<br>de Mapas</h2>
						<p id="serv_text1" class="circle_text cerrado">Un visor de mapas es una aplicación Web que permite visualizar y consultar las diferentes capas de información geo-referenciadas provenientes de los Geoservicios. Las mismas son actualizadas y publicadas por las áreas que conforman el SITU.</p>						
						<div class="ingresar">
							<a href="https://situ.santacruz.gob.ar/geoportal/visor/ide_santacruz" target="_blank" role="button">Ingresar <b> &#8213&#8213&#9656 </b></a>						
						</div>
					</div>
				</div>
				
				<div class="col-xs-12 col-md-4 my-auto">
					<div id="recuadro2" class="recuadro">
						<div class="iconos">
							<img src="img/ico-servicios.png">
						</div>
						<h2 class="serv_title">Geo<br>servicios</h2>
						<p id="serv_text2" class="circle_text cerrado">Los geoservicios permiten la publicación de información geográfica tanto en formato vectorial (WFS) como raster (WMS). Estos servicios, accesibles mediante un navegador de Internet, permiten visualizar, consultar o descargar información geográfica de acuerdo al estándar empleado.</p>
						
						<div class="ingresar">
							<a href="./geoservicios" target="_self" role="button">Ingresar <b> &#8213&#8213&#9656 </b></a>						
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-4 my-auto">
					<div id="recuadro3" class="recuadro">
						<div class="iconos">
							<img src="img/ico-metadatos.png">
						</div>
						<h2 class="serv_title">Catálogo de<br>Metadatos</h2>
						<p id="serv_text3" class="circle_text cerrado">Los servicios de catálogo permiten la publicación y búsqueda de Metadatos de datos, servicios y aplicaciones Web. Este servicio se realiza por medio de un protocolo estándar de comunicación que transmite peticiones entre el cliente y el servidor.</p>
						
						<div class="ingresar">
							<a href="https://situ.santacruz.gob.ar:8443/geonetwork/srv/spa/catalog.search#/home" target="_blank" role="button">Ingresar <b> &#8213&#8213&#9656 </b></a>						
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>

	<section id="banner2">
		<div class="container">
			<div class="row justify-content-md-center text-center">
				<div class="col-xs-12 col-md-6 img1">
					<p class="pantalla align-middle  my-auto " style="text-align: center;color: #0000005c;">Banner 540 x 115px</p>
					<p class="celular align-middle  my-auto " style="text-align: center;color: #0000005c;">Banner 335 x 115px</p>
				</div>	
				<div class="col-xs-12 col-md-6 img2">
					<p class="pantalla align-middle my-auto " style="text-align: center;color: #0000005c;">Banner 540 x 115px</p>
					<p class="celular align-middle my-auto " style="text-align: center;color: #0000005c;">Banner 335 x 115px</p>
				</div>			
			</div>
		</div>	
	</section>
	
	
</main>	
<?php include ('./include/footer.php');?>	