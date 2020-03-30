 <!DOCTYPE html>
<html lang="es">
<head>
    <!--<meta charset="ISO-8859-1">-->  
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Editar Autor</title>
    <link rel="stylesheet" href="../../css/generalCss.css">     
</head>
<body>

<?php include_once('../controladores/selecAutorPorIdController.php'); 
  foreach ($autor_editable as $autor) {



?>


<table>

<form action="../controladores/editarAutorController.php" method="post">

 

  <tr>
  <td>Nombre(s)</td>
  <td><input type="text" name="nombre_autor_input" value="<?php echo $autor['nombre_autor']?>" placeholder=""></td>
  </tr>

  <tr>
  <td>Apellido(s)</td>
  <td><input type="text" name="apellido_autor_input" value="<?php echo $autor['apellido_autor']?>" placeholder=""></td>
  </tr>

  <tr>
  <td>Pa&iacute;s de origen</td>
  <td><input type="text" name="pais_autor_input" value="<?php echo $autor['pais_autor']?>" placeholder=""></td>
  </tr>

  <tr>
  <td></td>
  <td><input type="hidden" name="id_autor_input" value="<?php echo $autor['id_autor']?>" placeholder=""></td>
  </tr>

  <tr>
  <td><input type="submit" value="Guardar cambios"></td>
  </tr>

  

  

  
</form> 

</table>


<?php 
  }
?>
</body>
</html>  
 
 
 