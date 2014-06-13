<?php
	require_once'configuracion/db.php';
	$cons= listar_pedidos(conectar());
		
echo'<form action="l_entregar.php" method="post"> 
	<input type="hidden" name="agregar"> 
		<div class="table_carrito" >
			<table>
			<tr>
                <td>usuario</td>
                <td>descripción</td>
                <td>total</td>
                <td>estado</td>
                <td>entregar</td>
            </tr>
		    ';
		while ($fila = mysql_fetch_array($cons)) {
		    $chek='';
			if($fila[4]!='no'){
				$chek='checked';
			}
			
			echo
		    	"<tr>
		    		<td>".$fila[1]."</td>
		    		<td>".$fila[2]."</td>
		    		<td>"."$ ".$fila[3]."</td>
		    		<td>
						<input type='checkbox' value='' $chek  onclick='return false' /> entregado
		    		</td>
		    		<td>
						<input type='submit' value='' class='btn_carritop' name='".$fila[0]."'>
					</td>
		    	</tr> ";
	    }
	echo' 
			</table>
		</div>
	</form>';

?>
