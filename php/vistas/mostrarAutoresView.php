 <!DOCTYPE html>
<html  lang="es">
<head>
    <title>Listado de autores</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Listado de autores">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="../../css/mostrarAutoresViewCss.css">
    <link rel="stylesheet" href="../../css/generalCss.css">     
</head>

<body>
<?php include_once('../controladores/mostrarAutoresController.php'); ?>

<div class="container-fluid">

<div class="listadoAutoresTbl table-responsive">

  <table cellpadding="10" cellpadding="10" class="table table-striped table-bordered">
  <tr>
    <th>Nombre(s)</th>
    <th>Apellido(s)</th>
    <th>Pa&iacute;s de origen</th>
  </tr>
<?php
            foreach ($listaAutores as $autor) {
              echo'<tr>';
              echo'<td>'.$autor['nombre_autor'].'</td>';
              echo'<td>'.$autor['apellido_autor'].'</td>';
              echo'<td>'.$autor['pais_autor'].'</td>';
              echo'<td class=""><button type="button" class="editBtn btn btn-success"><a href="../controladores/selecAutorPorIdController.php?id_autor='.$autor['id_autor'].'"><span class="glyphicon glyphicon-pencil"></span> Editar</a></button></td>';
              echo'<td class=""><button type="button" class="delBtn btn btn-danger"><a href="../controladores/eliminarAutorController.php?id_autor='.$autor['id_autor'].'"><span class="glyphicon glyphicon-trash"></span> Eliminar</a></button></td>';
              echo'</tr>';
            }
?>

  </table>
</div><!--table-responsive-->

</div><!--container-fluid-->

</body>
</html>  
 
 
 