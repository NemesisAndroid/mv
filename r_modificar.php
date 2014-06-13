<?php
    require 'configuracion/db.php';

	$claves = array_keys($_POST); 
	$prod_id = $claves[1];

	$my_producto = mysql_fetch_assoc(filter_prod_id($prod_id,conectar()));

	if ($my_producto["id"]>0){
	
		echo'
			<section id="mcontacto">
			<h3 class="capitaliza margenh3">Maqui-Vial >> abm prodctos</h3>
			<ul>
				<li class="licontacto contactoizq	">
					<h5 class="capitaliza margenh3">actualizar materiales</h5>
					<img class="paddin" src="imgs/actualizar.png" alt="" />
				</li>
				<li class="licontacto contactoder">
					<h5 class="capitaliza margenh3">formulario de material</h5>
					<form action="l_modificar_producto.php" method="post"·>
						<input type="hidden" requerid value="'.$my_producto["id"].'" name="id"/>
						<label for="nombre">descripción:</label>
						<input type="text" requerid value="'.$my_producto["descripcion"].'" name="des"/>
						<label for="nombre">cantidad:</label>
						<input type="text" requerid value="'.$my_producto["cantidad"].'" name="can"/>
						<label for="nombre">precio:</label>
						<input type="text" requerid value="'.$my_producto["precio"].'" name="pre"/>
						<input class="submit" type="submit" name="submit" value="Enviar" />
					</form>
				</li>
			</ul>
		';
	}  
	else { 
		header("Location:l_error.php");
	} 
?>