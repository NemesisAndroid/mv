<?php
    require 'configuracion/db.php';
    $consulta = consulta("productos",conectar());
    while ($fila = mysql_fetch_array($consulta)) {
        echo $fila[0]."-".$fila[1]."-".$fila[2]."-".$fila[3]."<br>";
    }
?>