<?php
    session_start("usuario");
    $_SESSION = array();
    session_destroy();
    header("Location:index.php"); 
?>
