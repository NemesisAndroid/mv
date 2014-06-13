<?php
	//inicio session de usuario para obtener su id
	$usuario=$_GET['var'];

	session_start('pedido');
	require 'configuracion/db.php';
	$pre=0;
	$des='';
	$ped='';

	//recorro la secion de pedidos para confeccionar el mismo
	if(!empty($_SESSION['pedido'])){ //Si hay productos en el carrito
		foreach($_SESSION['pedido'] as $key_prod => $prod) { 
				$pre+=$prod['sub'];
				$des=$des.$prod['can'].'->'.$prod['des'].', ';
				//$ped[$prod['des']]=$prod['can'];
 	}
	

	// agrego el pedido
	$res=insert_pedido($des,$pre,$usuario, conectar());
	
//verifico la respuesta del insert y redirecciono al formulario que corresponda
	if($res==1){
		//si  agrego bien destruir la sesion de pedidos y retorno al carrito
		$_SESSION['pedidos']= array();
		unset($_SESSION['pedido']);
		header("location:f_materiales.php");
	}else{
		header("location:f_error.php");
	}
		

?>