<?php
    header("Content-Type: text/html;charset=ISO-8859-1");
    include('../modelos/autores.php');
    $objAutores = new autores();

    $id_autor_get=$_GET['id_autor'];

    $autor_editable=$objAutores->seleccionarAutorPorIdMet($id_autor_get);
    
    include_once('../vistas/editarAutorView.php');
    
    
   
    
?>