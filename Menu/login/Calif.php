<html>
<?php
            session_start();
            $usuario = $_SESSION['usuario'];

            $conexion = mysqli_connect("localhost", "root", "", "rol") or
            die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select ex
                        from usuarios where usuario='$usuario'") or
    die("Problemas en el select:" . mysqli_error($conexion));

    while($reg = mysqli_fetch_array($registros)){
        $ex = $reg[0];
    }?>



    <font face="helvetica" size="3" color="2F2F2F"><p><div style="text-align: center;"><b>Usuario: </b><?php echo $usuario?></div></p></font><br>
        <font face="helvetica" size="5" color="2F2F2F"><p><div style="text-align: center;"><b>Calificación: <?php echo $ex?></b></div></p></font><br>
        <a href="index.php">
                    <input type="button" value="Regresar">
                </a>
        
</html>