<?php

session_start();
$conexion = mysqli_connect("localhost", "root", "", "rol") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select id,usuario,contraseña,id_cargo
                        from usuarios where usuario='$_REQUEST[usuario]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

  $registros2 = mysqli_query($conexion, "select id,usuario,contraseña,id_cargo
                        from usuarios where contraseña='$_REQUEST[contraseña]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

  $resultado = mysqli_query($conexion, "select ex
                        from usuarios where usuario='$_REQUEST[usuario]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros)) {
    $_SESSION['usuario'] = $reg[1];
    if($reg2 = mysqli_fetch_array($registros2)){
        $_SESSION['contraseña'] = $reg2[3];
        
        if ($res = mysqli_fetch_array($resultado)) {
            $ex = $res['ex'];
            if($ex == -1){
            header("Location: examen.php");
            }
            else{
            header("Location: Calif.php");
            }
            }
    } else {?>
        <font face="helvetica" size="5" color="2F2F2F"><p><div style="text-align: center;"><b>No existe un alumno con esos datos.</b></div></p></font><br>
    <?php
    mysqli_close($conexion);
    }   
} else {?>
    <font face="helvetica" size="5" color="2F2F2F"><p><div style="text-align: center;"><b>No existe un alumno con esos datos.</b></div></p></font><br>
<?php
mysqli_close($conexion);
}


