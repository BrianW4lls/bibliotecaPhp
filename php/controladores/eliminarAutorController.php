<?php
    include_once('../modelos/autores.php');
    $objAutores = new autores();    
    $id_autor_get=$_GET['id_autor'];    
    $objAutores->eliminarAutorMet($id_autor_get);
    
?>