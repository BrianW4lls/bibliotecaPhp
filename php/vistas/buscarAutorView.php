 <!DOCTYPE html>
<html>
<head>
    <title>Listado de autores</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Listado de autores">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="../../css/mostrarAutoresViewCss.css">  
    <link rel="stylesheet" href="../../css/generalCss.css">     
</head>

<body>

<div>  
  <table cellpadding="10" cellpadding="10">
  <tr>
    <td colspan="3"><form action="../controladores/mostrarAutoresController.php" method="POST">
        <input size="50" maxlenght="30" type="text" name="buscar_autor_input" value="" class="cuadroBusc" placeholder="BUSCA AUTORES POR NOMBRE, APELLIDO O PAÍS">
    </td>
    <td><input type="submit" value="BUSCAR"></form></td>    
  </tr>
  </table>
</div>

</body>
</html>  
 
 
 