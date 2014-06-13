<?php
	require 'configuracion/db.php';
	$tags = array_keys($_POST); // obtiene los nombres de las varibles
	$id=$tags[1]; 
	// actualizo el producto
	$res=delete_producto($id, conectar());
	if($res==1){
		header("location:f_materiales_eliminar.php");
	}else{
		//mandar al error de productos
		header("location:f_error.php");
	}
		

?>