<?php
  require 'configuracion/db.php';

	$claves = array_keys($_POST); 
	
	$id = $claves[1];

	//consulta a bd
	$entregar = entregado_pedido ($id,conectar());
	if ($entregar==1){
		//error al entregar el pedido
		header("Location:f_materiales.php");
		
	}  
	else { 
		//error al entregar el pedido
		header("Location:l_error.php");
			
	} 
?>