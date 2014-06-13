<?php
	require 'configuracion/db.php';
	$cantidad = count($_POST);
	$tags = array_keys($_POST); // obtiene los nombres de las varibles
	$valores = array_values($_POST);// obtiene los valores de las varibles

	// crea las variables y les asigna el valor
	for($i=0;$i<$cantidad;$i++){ 
		$$tags[$i]=$valores[$i]; 
	}
	// actualizo el producto
	$res=update_producto($des,$can,$pre,$id, conectar());
	if($res==1){
		header("location:f_materiales.php");
	}else{
		//mandar al error de productos
		header("location:f_error.php");
	}
		

?>