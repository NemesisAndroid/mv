<?php
	require_once'configuracion/db.php';
	$cons= consulta("productos", conectar());
		
echo'<form action="f_modificar.php" method="post"> 
	<input type="hidden" name="agregar"> 
		<div class="table_carrito">
			<table>
			<tr>
				<td>imagen</td>
               	<td>descripción</td>
                <td>cantidad</td>
                <td>precio</td>
                <td>modificar</td>
            </tr>
		    ';
		while ($fila = mysql_fetch_array($cons)) {
		    echo
		    	"<tr>
					<td><img src=imgs/".$fila[0].".jpg class= 'imgsmall' /></td>
		    		<td>".$fila[1]."</td>
		    		<td>".$fila[2]."</td>
		    		<td>"."$ ".$fila[3]."</td>
		    		<td>
						<input type='submit' value='' class='btn_carritomo' name='".$fila[0]."'>
		    		</td>
		    	</tr> ";
	    }
?>
