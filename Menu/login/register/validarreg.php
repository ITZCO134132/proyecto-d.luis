<html>
<body>
  <?php
  
  $conexion = mysqli_connect("localhost", "root", "", "rol") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into usuarios(nombre,usuario,contraseña,ex) values
                       ('$_REQUEST[nombre]','$_REQUEST[usuario]','$_REQUEST[contraseña]','-1')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);?>
  <a href="index.php">
     <input type="button" value="Regresar">
  </a>

  
</body>

</html>
