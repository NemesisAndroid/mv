<?php
    session_start("usuario");
    require 'configuracion/db.php';
    
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["pass"];
    
    $resulset =consulta_usu($usuario,$contrasena, conectar());
    
	if (mysql_num_rows($resulset) > 0 ) {
        while ($row = mysql_fetch_assoc($resulset)) {
            $_SESSION["id"] = $row['id_usuario'];
            $_SESSION["usuario"] = $row['usuario_nombre'];
            $_SESSION["rol"] = $row['usuario_rol'];
        }
    }
    header("Location: index.php") ; 
?>
