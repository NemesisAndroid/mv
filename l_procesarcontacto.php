<?php
    require 'configuracion/db.php';
     
    $valores = "'".$_POST["nombre"]."','".$_POST["email"]."',".$_POST["telefono"].",'".$_POST["provincia"]."','".$_POST["comentario"]."'";

	insert_mensaje($valores, conectar());
    
    header("Location: index.html") ;
?>