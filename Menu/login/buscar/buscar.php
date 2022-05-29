<html>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "rol") or
  die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select nombre from usuarios where usuario ='$_REQUEST[usuario]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

  if ($reg = mysqli_fetch_array($registros)) {
    echo "Nombre:" . $reg['nombre'] . "<br>";
  } else {
    echo "No existe un alumno con ese mail.";
  }
  mysqli_close($conexion);
  ?>

  <input type="submit" value="BORRAR">
  <form action="borrar/borrar.php"></form>

</body>

</html>