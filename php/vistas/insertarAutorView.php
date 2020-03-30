 <!DOCTYPE html>
<html>
<body>

<table>

<form action="../controladores/insertarAutorController.php" method="post"> 

  <tr>
  <td>Nombre(s)</td>
  <td><input type="text" name="nombre_autor_input" value="" placeholder="Ej: Gabriel"></td>
  </tr>

  <tr>
  <td>Apellido(s)</td>
  <td><input type="text" name="apellido_autor_input" value="" placeholder="Ej: García Márquez"></td>
  </tr>

  <tr>
  <td>País</td>
  <td><input type="text" name="pais_autor_input" value="" placeholder="Ej: Colombia"></td>
  </tr>

  <tr>
  <td><input type="submit" value="Insertar en la BD"></td>
  </tr>
  
</form> 

</table>

</body>
</html>  
 
 
 