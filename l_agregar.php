<?php
	session_start('pedido');
    require 'configuracion/db.php';

	if(isset($_POST['agregar'])){ //Si se envió el primer formulario 
		$claves = array_keys($_POST); 
		$prod_id = $claves[1];

		//consulta a bd
		$my_producto = mysql_fetch_assoc(filter_prod_id($prod_id,conectar()));

		if ($my_producto["cantidad"]>=1){
			if(array_key_exists("$prod_id",$_SESSION['pedido'])){ 
				$cantidad = $_SESSION['pedido']["$prod_id"]['can'];
				
				if($my_producto["cantidad"]>=($cantidad+1)){
					$_SESSION['pedido']["$prod_id"]['can'] = ++$cantidad;  
					$_SESSION['pedido']["$prod_id"]['sub'] = ($cantidad * $_SESSION['pedido']["$prod_id"]['sub']);
				}else{
						//error cantidad insuficiente
						//header("Location:l_error.php");
					}
			}  
			else { 
				$sub=$my_producto['precio'];
				$_SESSION['pedido']["$prod_id"] = array("id"=>$prod_id,
											"des"=> $my_producto['descripcion'],
											"can"=> 1,
											"pre"=> $my_producto['precio'],
											"sub"=> $sub*1
				); 
				
			} 
		}
		else{
			//error cantidad insuficiente
			//header("Location:l_error.php");
		}
		header ("Location:f_materiales.php#carrito");
	}
?>