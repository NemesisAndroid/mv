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
			<h3 class="capitaliza margenh3">Maqui-Vial >> Construcción</h3>
			<div class="perfil capitaliza">
				<p class="perfil capitaliza"> En Maqui-Vial contamos con la experiencia necesaria para llevar a cabo con proyectos de construcion mas modernos en obras civiles y obras viales. </p>
				<p class="perfil capitaliza"> Además, trabajamos con sistemas de construcción en seco e instalación integral de comercios..</p>
			</div>				
			<ul>
				<li><a href="#mcontacto"><div class="hide"><h5>comercios</h5></div><img src="imagenes/lateralder.png" alt="" class="imgfijo"></a></li>
				<li><a href="#mcontacto"><div class="hide"><h5>remodelados</h5></div><img src="imagenes/foto6.png" alt="" class="imgfijo"></a></li>
				<li><a href="#mcontacto"><div class="hide"><h5>contrucción</h5></div><img src="imagenes/foto5.png" alt="" class="imgfijo"></a></li>
			</ul>
		</section>
		<?php
			require_once'r_construccion.php';
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
