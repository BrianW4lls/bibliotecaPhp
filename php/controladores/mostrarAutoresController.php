<?php    
    header("Content-Type: text/html;charset=ISO-8859-1");
    include_once('../modelos/autores.php');
    $objAutores = new autores();
    $buscar_autor_post=$_POST["buscar_autor_input"];
    $listaAutores=$objAutores->mostrarAutoresMet($buscar_autor_post);    
    include_once('../vistas/mostrarAutoresView.php');
?>