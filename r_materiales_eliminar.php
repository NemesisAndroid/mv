<?php
	require_once'configuracion/db.php';
	$cons= consulta("productos", conectar());
		
echo'<form action="l_eliminar_producto.php" method="post"> 
	<input type="hidden" name="agregar"> 
		<div class="table_carrito">
			<table>
			<tr>
               	<td>descripción</td>
                <td>cantidad</td>
                <td>precio</td>
                <td>eliminar</td>
            </tr>
		    ';
		while ($fila = mysql_fetch_array($cons)) {
		    echo
		    	"<tr>
		    		<td>".$fila[1]."</td>
		    		<td>".$fila[2]."</td>
		    		<td>"."$ ".$fila[3]."</td>
		    		<td>
						<input type='submit' value='' class='btn_carrito' name='".$fila[0]."'>
		    		</td>
		    	</tr> ";
	    }
?>
