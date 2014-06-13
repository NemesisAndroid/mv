<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="utf-8">
	<title>Alquiler de minicargadores y Obras civiles Ciudad de Resistencia - Maqui-Vial</title>
	<meta name="author" content="Soluciones 3g">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>

</head>
<body>
<?php
require_once'r_header.php'	
?>
	<div class="wrapper">
		<section  class="perfil" id="inicio">
				<h3 class="capitaliza margenh3">Maqui-Vial >> Inicio</h3>
				<img src="imagenes/lateralizq.png" title="Maqui-Vial logo" alt="Maqui-Vial logo"> 
				<h5>Nuestra empresa</h5>
				<p class="capitaliza">En Maqui-Vialpodr&aacute; encontrar una diversificada empresa, con amplia trayectoria y credibilidad en Resistencia.Estamos dedicados a prestar servicios de calidad en todo lo relacionado con el desarrollo de obras civiles y viales; contamos con el servicio de alquiler de minicargadores, retroescabadoras y camiones.Además, realizamos instalación integral de comercios.</p>
				<p class="capitaliza">Ponemos a su disposici&oacute;n, y a la de su empresa, toda nuestra implementaci&oacute;n log&iacute;stica y equipamiento t&eacute;cnico para cubrir pedidos o solicitudes que a nuestro <a class="link" href="#portfolio">trabajo</a> competen. Comun&iacute;quese con nosotros, nuestro personal brindar&aacute; atenci&oacute;n personalizada a todos nuestros clientes.<br />
				<p class="capitaliza">Ante cualquier requerimiento, no dude en <a class="link" href="#contacto">contactarnos!</a></p>
				<p class="capitaliza">Gracias por visitar nuestro sitio web. Mediante esta herramienta digital buscamos crear un v&iacute;nculo de mayor cercan&iacute;a con nuestros clientes y proveedores.</p>
				
		</section>
		<section id="portfolio">
			<h3 class="capitaliza margenh3">Maqui-Vial >> Trabajos</h3>
			<ul>
				<li><div class="hide"><h5>trabajos</h5></div><img src="imagenes/foto1.jpg" alt=""></li>
				<li><div class="hide"><h5>trabajos</h5></div><img src="imagenes/foto2.png" alt=""></li>
				<li><div class="hide"><h5>trabajos</h5></div><img src="imagenes/foto3.png" alt=""></li>
				<li><div class="hide"><h5>trabajos</h5></div><img src="imagenes/foto4.png" alt=""></li>
				<li><div class="hide"><h5>trabajos</h5></div><img src="imagenes/foto5.png" alt=""></li>
				<li><div class="hide"><h5>trabajos</h5></div><img src="imagenes/foto6.png" alt=""></li>
				<li><div class="hide"><h5>trabajos</h5></div><img src="imagenes/foto7.png" alt=""></li>
			</ul>
			<div class="back">
				<a href="#inicio">
				volver
			</a>
		</div>
		</section>

		<?php 
				require_once'r_contacto.php';
		?>
			<div class="back">
				<a href="#inicio">
					volver
				</a>
			</div>
		</section>

	</div>
<?php
	require_once'r_footer.php'	
?>

</body>
</html>
