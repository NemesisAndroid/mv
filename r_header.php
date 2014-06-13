<?php
    session_start("usuario");
    $usuario = (!empty($_SESSION['usuario']))?$_SESSION['usuario']:"";
    $rol = (!empty($_SESSION['rol']))?$_SESSION['rol']:"";
	$id = (!empty($_SESSION['id']))?$_SESSION['id']:"";
 ?>
	<header>
		<ul>
			<li class="lihead">		
				<img class="paddleft" src="imagenes/logo.png" title="Maqui-Vial logo" alt="Maqui-Vial logo"> 
				<div id="Hcontacto">
					<p>edgardo_espinola@hotmail.com</p>
					<p>(0362) 444 0477</p>
				</div>
			</li>
			<li class="lihead">
				<nav>
					<ul>
						<li><a href="index.php">inicio</a></li>
						<li><a href="f_alquileres.php">alquileres</a></li>
						<li><a href="f_construccion.php">construciones</a></li>
						<li><a href="f_materiales.php">materiales</a></li>
					<?php if ($rol!="") {
							echo"<li><a href='l_cerrar_sesion.php'>".$usuario." cerrar sesión </a></li>";
						 }else{
							echo'<li><a href="f_login.php">loguearse</a></li>';
						 }?>
					</ul>
				</nav>	
			</li>

		</ul>
	</header>