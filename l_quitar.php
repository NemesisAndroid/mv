<?php
	session_start('pedido');

	if(isset($_POST['quitar'])){ //Si se envió el segundo formulario 
		$claves = array_keys($_POST); 
		$producto = $claves[1]; 
		unset($_SESSION['pedido'][$producto]); //Eliminar la posicion del arreglo 
		header("location:f_materiales.php");
	}else{
		header("location:f_error.php");
	}

?>