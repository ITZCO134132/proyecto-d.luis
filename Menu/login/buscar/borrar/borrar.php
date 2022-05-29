<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "rol") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select codigo from usuarios
                        where usuario='$_REQUEST[nombre]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    mysqli_query($conexion, "delete from usuarios where usuario='$_REQUEST[usuario]'") or
      die("Problemas en el select:" . mysqli_error($conexion));
    echo "Se efectuó el borrado del alumno con dicho mail.";
  } else {
    echo "No existe un alumno con ese mail.";
  }
  mysqli_close($conexion);
  ?>
</body>

</html>