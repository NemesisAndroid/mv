<?php
    
    function conectar(){

        if(!$conexion = mysql_connect('localhost','root','LALO2020')){
    			header("location:f_error.php");
    		}

        if(!mysql_select_db('carrito')){
    			header("location:f_error.php");
    		} 
        
        return $conexion;  
    }
    
    
    function consulta ($tabla,$con ){
        $consulta = mysql_query("select * from ".$tabla , $con) or die ("No se realizo la consulta");
        return $consulta;    
    }
   
    function insert_pedido ($des,$pre,$usu,$con ){
		//por defecto en la bd carcga como no visto y no entregado
        $query="insert into pedidos (des,total,usu) values('".$des."' , $pre, $usu)";
        $consulta = mysql_query($query , $con) or die ("no actualizo".mysql_error());
		return $consulta;    
    }
    function insert_usuario ($nom,$pass,$mail,$con ){
		//por defecto en la bd carcga como no visto y no entregado
        $query="insert into usuarios (usuario_nombre, usuario_password, mail, usuario_rol) values('".$nom."' , '".$pass."', '".$mail."','visita')";
        $consulta = mysql_query($query , $con) or die ("no actualizo".mysql_error());
		return $consulta;    
    }
    
    function entregado_pedido ($id,$con ){
		//por defecto en la bd carcga como no entregado
        $query="update pedidos set entregado='si' where id=$id";
        $consulta = mysql_query($query , $con) or die ("no actualizo".mysql_error());
        return $consulta;    
    }
    function listar_pedidos($con){
        $query='select pe.id, usu.usuario_nombre, pe.des, pe.total, pe.entregado from pedidos as pe , usuarios as usu where (pe.usu = usu.id_usuario)';
        $consulta = mysql_query($query , $con) or die ("no actualizo".mysql_error());
        return $consulta;    

    }
	function delete_producto ($id, $con ){
        $query="delete from productos where id=$id";
        $consulta = mysql_query($query , $con) or die (" no se elimino".mysql_error());
        return $consulta;    
    }
	
	function insert_producto ($des,$can,$pre, $con ){
        $query="insert into productos (descripcion,cantidad,precio) values ('".$des."' , $can ,$pre)";
        $consulta = mysql_query($query , $con) or die ("no actualizo".mysql_error());
        return $consulta;    
    }
	function update_producto ($des,$can,$pre,$id, $con ){
        $query="update productos set descripcion='".$des."' , cantidad=$can , precio=$pre where id=$id";
        $consulta = mysql_query($query , $con) or die ("no actualizo".mysql_error());
        return $consulta;    
    }
    
	function filter_prod_id ($id, $con ){
        $consulta = mysql_query("select * from productos where id=".$id , $con) or die ("No se realizo la consulta");
        return $consulta;    
    }
	function filter_prod_des ($id, $con ){
		$consulta = mysql_query("select * from productos where descripcion like'%$id%'" , $con) or die ("No se realizo la consulta");
        return $consulta;    
    }
  
    function consulta_usu ($usu, $pas,$con){
        
        $consulta = mysql_query("select * from usuarios where usuario_nombre='".$usu."' and usuario_password='".$pas."'" , $con) 
            or die ("No se realizo la consulta en la tabla usuario");
        return $consulta;    
    }
  
  function insert_mensaje($valores, $con)
  {
		$consulta = "INSERT INTO mensajes (nom_completo, email, telefono,provincia,comentarios) VALUES (" . $valores . ");";
		mysql_query($consulta, $con) or die ("No se realizo la consulta".mysql_error());
        
  }
  function cerrar(){
      mysql_close(conectar());
  }
?>
