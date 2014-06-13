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
		<section id="portfolio">
			<h3 class="capitaliza margenh3">Maqui-Vial >> Alquileres</h3>
			<div class="perfil capitaliza">
				<p> En Maqui-Vial contamos con moderno equipamiento para alquiler, el cual incluye:</p>
			</div>

			<ul>
				<li><a href="#mcontacto"><div class="hide"><h5>minicargadores</h5></div><img src="imagenes/foto1.jpg" alt="" class="imgfijo"></a></li>
				<li><a href="#mcontacto"><div class="hide"><h5>camiones</h5></div><img src="imagenes/foto10.jpg" alt="" class="imgfijo"></a></li>
				<li><a href="#mcontacto"><div class="hide"><h5>volcadores</h5></div><img src="imagenes/foto2.png" alt="" class="imgfijo"></a></li>
			</ul>
		</section>
		<?php
			require_once'r_maquinas.php';
		?>
		<?php
			require_once'r_contacto.php';
		?> 
			<div class="back">
				<a href="#portfolio">
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
