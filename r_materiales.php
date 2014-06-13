<?php
	require_once'configuracion/db.php';
	$cons = '';//filter_prod_des ("cem", conectar());
	function dibujar_tabla($cons, $usu){
		echo'<form action="l_agregar.php" method="post"> 
	<input type="hidden" name="agregar"> 
		<div class="table_carrito">
			<table>';
	
	if ($usu==''){
			echo"<tr>
					<td>imagen</td>
                	<td>descripción</td>
                    <td>cantidad</td>
                    <td>precio</td>
                </tr>";
	   while ($fila = mysql_fetch_array($cons)) {
	  	  	print( 
		 	  	"
		 	  	<tr>
					<td><img src=imgs/".$fila[0].".jpg class= 'imgsmall' /></td>
		  	  		<td>".$fila[1]."</td>
		  	  		<td>".$fila[2]."</td>
		  	  		<td>"."$ ".$fila[3]."</td>
		  	  	</tr> ");
	   }
	}else{
			echo"<tr>
					<td>imagen</td>
                	<td>descripción</td>
                    <td>cantidad</td>
                    <td>precio</td>
                    <td>agregar</td>
                </tr>
		    ";
		while ($fila = mysql_fetch_array($cons)) {
		    print(
		    	"<tr>
				<td><img src=imgs/".$fila[0].".jpg class = 'imgsmall' /></td>
		    		<td>".$fila[1]."</td>
		    		<td>".$fila[2]."</td>
		    		<td>"."$ ".$fila[3]."</td>
		    		<td>
			    		<input type='submit' value='' class='btn_carritop' name='".$fila[0]."'>
		    		</td>
		    	</tr> ");
	    }
}
	}

	if(isset($_GET['buscar']) and $_GET['buscar']!=''){
		$buscar = $_GET['buscar'];
		$cons = filter_prod_des ($buscar, conectar() );
		dibujar_tabla($cons,$usuario);
		
	}else{
		$cons = consulta ("productos", conectar() );
		dibujar_tabla($cons,$usuario);
	}
	
	
?>
