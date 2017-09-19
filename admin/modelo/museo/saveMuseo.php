<?php
    session_start();
    include_once("MuseoCollector.php");
    include_once("Museo.php");
	$nombre = $_POST['nombre'];
	$id_ciudad = $_POST['id_ciudad'];
    $museoCollectorObj = new MuseoCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
  
        <?php
        $estadoAux = substr ("$estado", 0,1);
        $museoCollectorObj->createMuseo($nombre, $estadoAux);
        $mensaje = "EL MUSEO SE CREO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readMuseo.php'>";
        ?>
  
    </body>
</html>
