<html>
<?php
session_start();
        $prom=0;
                if($_REQUEST['1']=='a'){
                    $prom=$prom+1;
                }
                if($_REQUEST['2']=='b'){
                    $prom=$prom+1;
                }
                if($_REQUEST['3']=='c'){
                    $prom=$prom+1;
                }
                if($_REQUEST['4']=='c'){
                    $prom=$prom+1;
                }
                if($_REQUEST['5']=='c'){
                    $prom=$prom+1;
                }
                if($_REQUEST['6']=='a'){
                    $prom=$prom+1;
                }
                if($_REQUEST['7']=='a'){
                    $prom=$prom+1;
                }
                if($_REQUEST['8']=='b'){
                    $prom=$prom+1;
                }
                if($_REQUEST['9']=='c'){
                    $prom=$prom+1;
                }
                if($_REQUEST['10']=='c'){
                    $prom=$prom+1;
                }
                $conexion = mysqli_connect("localhost", "root", "", "rol") or
                die("Problemas con la conexión");
            
                $registros = mysqli_query($conexion, "select * from usuarios
                                    where usuario='" . $_SESSION['usuario'] . "' ") or
                die("Problemas en el select:" . mysqli_error($conexion));

                if ($reg = mysqli_fetch_array($registros)) {       
                    
                    mysqli_query($conexion, "update usuarios
                    SET ex='". $prom . "'
                    WHERE usuario='". $_SESSION['usuario']. "'") or
                    die("Problemas en el select:" . mysqli_error($conexion));

                mysqli_close($conexion);?>
                <font face="helvetica" size="5" color="2F2F2F"><p><div style="text-align: center;"><b>Calificación: <?php echo $prom?></b></div></p></font><br>
                <?php
                } else {?>
                    <font face="helvetica" size="5" color="2F2F2F"><p><div style="text-align: center;"><b>No se encontró un alumno con esos datos.</b></div></p></font><br>
                    <?php
                    }
                    ?>
                <a href="index.php">
                    <input type="button" value="Regresar">
                </a>
</html>