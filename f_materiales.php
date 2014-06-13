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
	require_once'r_header.php';
//	session_start('pedido');
?>
	<div class="wrapper">
		<section id="inicio">
			<h3 class="capitaliza margenh3">Maqui-Vial >> Materiales</h3>
			<div class="perfil capitaliza">
				<p> En Maqui-Vial contamos con la siguiente lista de materiales para la construcción:</p>
				
				<?php 
					//recorro la sesion 'pedidos' para imprimir la cantidad de articulos en el mismos
					$can=0;
					if(!empty($_SESSION['pedido'])){ //Si hay productos en el carrito
								foreach($_SESSION['pedido'] as $key_prod => $prod) { 
									$can+=$prod['can'];
								}
					}
					//consulto si el usuario es != '' para mostrar los diferentes link	
				
					if ($usuario=='') {
                		echo"<p> Debe <a class='link' href='f_login.php'>registarse</a> para poder comprar</p>";
						echo'	<p> Ante cualquier duda <a class="link" href="#contacto">contactenos!</a></p>';
					}
					elseif(($usuario!='')and($rol!='admin')){
						echo'<p> Ante cualquier duda <a class="link" href="#contacto">contactenos!</a></p>';
						echo"<p> vea su <a class='link' href='#carrito'>carrito</a> tiene $can articulos</p>";
	  		    	}else{
					
						echo"<p> Acciones de ABM <a class='link' href='f_materiales_eliminar.php'>Eliminar</a> o <a class='link' href='f_materiales_agregar.php'>Agregar</a></p>";
						echo"<p> vea su <a class='link' href='#carrito'>Pedido</a></p>";
						

					}
                ?>
				<form action ="f_materiales.php" method="get">
					<label>Ingresar palabra de busqueda</label>
					<input type="text" name="buscar"> 
					<input type="submit" value="Buscar" class="submit" >
				</form>
				<br><br><br>
           	</div>
				
				<?php 
				//verificar rol para mostrar un formulario de compra o el otro abm	
				if ($rol!='admin'){
					require_once'r_materiales.php';
				}else{
					require_once'r_materiales_admin.php';
				}
				?>  
	                </table>
				</div>
			</form>
		</section>
		
		<section id="carrito">
		<?php 
		//consulto si el usuario es != '' y verifico si el rol del usuario es != 'admin' para mostrar el carro de compras		
		if (($usuario!='') and ($rol!='admin')){ 
		?>
			<h3 class="capitaliza margenh3">Maqui-Vial >> productos en carrito</h3>
			<div class="perfil capitaliza">
				<p> Aqui se encuentran todos sus productos seleccionados para la compra:</p>
				<p> Ante cualquier duda <a class="link" href="#contacto">contactenos!</a></p>
           	</div>
			<form action="l_quitar.php" method="post"> 
				<input type="hidden" name="quitar"> 
				<div class="table_carrito">
					<table>
						<?php 
							echo"<tr>
			                    <td>cantidad</td>
			                	<td>descripción</td>
								<td>Precio Unitario</td>
								<td>SubTotal</td>
			                    <td>quitar</td>
                			</tr>";
							if(!empty($_SESSION['pedido'])){ //Si hay productos en el carrito
								$tot=0;
								$can=0;
								foreach($_SESSION['pedido'] as $key_prod => $prod) { 
									echo "<tr>
								    		<td>".$prod['can']."</td>
											<td>".$prod['des']."</td>
											<td> $ ".$prod['pre']."</td>
											<td> $ ".$prod['sub']."</td>
								    		<td>
									    		<input type='submit' class='btn_carrito' value=''name=$key_prod />
								    		</td>
								    	</tr> ";
									$tot+=$prod['sub'];
									$can+=$prod['can'];
								}
							echo "	<tr>
										<td colspan='3'></td>
										<td colspan='2'>Total de compra  es $ $tot</td>
									</tr>";
							}else{
								echo "<tr><td colspan='5'>no ha productos seleccionados para la compra</td></tr>";
							}
	                	?>  
	                </table>
				</div>
			</form>
			<?php 				
			//consulto si el hay productos en el carrito muestro otro prod o comprar	
			if(!empty($_SESSION['pedido'])){ //Si hay productos en el carrito
				echo"<div class='back'>
					<a href='#inicio'>otro producto - </a>
					<a href='l_agregar_pedido.php?var=$id'>comprar</a>
				</div>";
				}else{
				//si no muestro volver	
					echo"<div class='back'>
						<a href='#inicio'>volver</a>
					</div>";
				
				}
			}elseif($rol=='admin'){
			//Conociendo que el usuasrio logueado es admin muestro todo lo referente admin 	
			echo'<h3 class="capitaliza margenh3">Maqui-Vial >> listado pedidos</h3>
			<div class="perfil capitaliza">
				<p> Aqui se encuentran todos sus productos pedidos por los diferentes usuarios:</p>
			</div>';

			require_once'r_pedidos.php';
			echo' 
				<div class="back">
					<a href="#inicio">
						volver
					</a>
				</div>
			';
			}
			?>
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
	require_once'r_footer.php';
?>
</body>
</html>
