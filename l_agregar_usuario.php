<?php
    session_start("usuario");
    require 'configuracion/db.php';
    
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["pass"];
    $mail = $_POST["email"];
    $resulset = insert_usuario($usuario,$contrasena,$mail, conectar());
    
	if ($resulset > 0 ) {
		header("Location: index.php") ; 
    }else{
		header("Location: f_error.php") ;
	}
     
?>
