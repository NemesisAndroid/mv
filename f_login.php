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
		
		<section id="contacto">
			<h3 class="capitaliza margenh3">Maqui-Vial >> Login</h3>
			<ul>
				<li class="licontacto contactoizq">
					<h3 class="capitaliza margenh3">Si ya sos usuarios inicia sesión</h3>
					<form action="l_sesion.php" method="post">
						<label>usuario:</label>
						<input id="usuario_s" type="text" name="usuario" placeholder="Nombre de usuario" required />
						<label>clave:</label>
						<input id="pass_s" type="password" name="pass" placeholder="clave personal" required />
						<input class="submit"  type="submit" name="submit" value="loguearse" />
					</form>
				</li>
				<li class="licontacto contactoder">
					<h3 class="capitaliza margenh3">Si no sos usuario por favor registrarse y accede a los beneficios</h3>
					<form action="l_agregar_usuario.php" method="post">
						<label>correo electronico:</label>
						<input id="email_r" type="email" name="email" placeholder="ejemplo@otroejemplo.com" required />
						<label>usuario:</label>
						<input id="usuario_r" type="text" name="usuario" placeholder="Nombre de usuario" required />
						<label>clave:</label>
						<input id="pass_r" type="password" name="pass" placeholder="clave personal" required />
						<input class="submit" type="submit" name="submit" value="registrarse" />
					</form>

				</li>
			</ul>
		</section>
	</div>
<?php
	require_once'r_footer.php'	
?>
</body>
</html>
