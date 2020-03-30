<?php
    $nombre_autor_post=$_POST["nombre_autor_input"];
    $apellido_autor_post=$_POST["apellido_autor_input"];
    $pais_autor_post=$_POST["pais_autor_input"];
    include_once('../modelos/autores.php');    
    $objAutores = new autores();
    $objAutores->insertarAutorMet("", $nombre_autor_post, $apellido_autor_post, $pais_autor_post);    
?>