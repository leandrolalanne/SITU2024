<?php include ('../include/head2.php');?>
<main role="main">
	<div class="container">
		<section id="geoservicios">
		<h2>SERVICIOS / Geoservicios</h2>
		<p>Aquí podrá acceder a distintos servicios (WMS y WFS), que brinda SITU y descargar archivos en diferentes formatos (shape, geojson, png o csv), que pueden ser utilizados en distintas plataformas y clientes de Sistemas de Información Geográfica, bases de datos espaciales, mapas web.</p>
		<!--
		<p>Los geoservicios publicados por SITU responden a estándares OGC (WMS/WFS) y siguen las recomendaciones de IDERA.</p>
		<p>Los geoservicios permiten la publicación de información geográfica tanto en formato vectorial (WFS) como raster (WMS). Estos servicios, accesibles mediante un navegador de Internet, permiten visualizar, consultar o descargar información geográfica de acuerdo al estándar empleado.</p>
		-->
		<p>A través de estos es posible incorporar capas a nuestros proyectos sin necesidad de tenerlas almacenadas en nuestro equipo y con la garantía de contar con la última versión de las mismas.</p>
		<h4>Servicios WMS</h4>
		<div style="display:flex; flex-wrap: nowrap;">
		<div style="float:left;">
		<p>El Servicio de Mapas en Web (WMS) permite la visualización de información geográfica a partir de una representación de ésta, de una imagen del mundo real para un área solicitada por el usuario. Esta representación puede provenir de un archivo vectorial de un SIG, un mapa digital, una ortofoto, una imagen de satélite, entre múltiples posibilidades. Puede organizarse en una o más capas de datos que pueden visualizarse u ocultarse una a una. Se puede consultar cierta información disponible y las características de la imagen del mapa.</p>
		<p><b><a href="https://situ.santacruz.gob.ar/geoserver/ows?service=wms&request=GetCapabilities" style="text-decoration:none;" target="_blank">http://situ.santacruz.gob.ar/geoserver/ows?service=wms&request=GetCapabilities</a></b></p>
		</div>
		</div>
		<h4 style="padding-top:30px;">Servicio de Vectores Web (WFS) (en inglés, Web Feature Service):</h4>
		<div style="display:flex; flex-wrap: nowrap;">
		<div style="float:left;">
		<p>Es un estándar abierto que brinda la posibilidad de transferir vectores que representan elementos geográficos, junto a sus atributos. El formato que utiliza para transportar los datos es GML. El protocolo WFS se puede utilizar para desplegar vectores en una aplicación Web de mapas, como también para traer los vectores a un SIG de escritorio como QGIS, Arcmap, GvSig, entre otros, para trabajar con las geometrías y las tablas de atributos o realizar geoprocesos y acciones de mayor complejidad.</p>
		<p><b><a href="https://situ.santacruz.gob.ar/geoserver/ows?service=wfs&request=GetCapabilities" style="text-decoration:none;" target="_blank">http://situ.santacruz.gob.ar/geoserver/ows?service=wfs&request=GetCapabilities</a></b></p>
		</div>
		</div>
		<div style="display:flex; flex-wrap: nowrap;">
		<div style="float:left; padding-top:30px;">
		<p>Cualquier duda con la terminología citada, puede consultar el Glosario de IDERA.</p>
		<p>Glosario de IDERA:</p>
		<p><b><a href="https://www.idera.gob.ar/images/stories/downloads/documentos/Glosario_IDERA.pdf" style="text-decoration:none;" target="_blank">https://www.idera.gob.ar/images/stories/downloads/documentos/Glosario_IDERA.pdf</a></b></p>
		</div>
		</div>
		<div style="padding-top:30px">
			<p>Cualquier uso es de exclusiva responsabilidad del usuario. Queda, además, prohibida su comercialización en cualquiera de sus formas.</p>
			<p>Para la publicación de la información obtenida a partir de esta base, siempre debe citarse la fuente.</p>
			<p>La forma sugerida para citar a SITU como fuente de la base geográfica primaria es:</p>
			<p>Fuente: <b>SITU Gobierno de Santa Cruz</b></p>
		</div>
	</section>
	</div>
</main>
<?php include ('../include/footer2.php');?>	