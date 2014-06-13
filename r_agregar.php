<?php
    require 'configuracion/db.php';
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
					<form action="l_agregar_producto.php" method="post"·>
						<input type="hidden" requerid value="" name="id"/>
						<label for="nombre">descripción:</label>
						<input type="text" requerid value="" name="des"/>
						<label for="nombre">cantidad:</label>
						<input type="text" requerid value="" name="can"/>
						<label for="nombre">precio:</label>
						<input type="text" requerid value="" name="pre"/>
						<input class="submit" type="submit" name="submit" value="Enviar" />
					</form>
				</li>
			</ul>
		';
	 
?>