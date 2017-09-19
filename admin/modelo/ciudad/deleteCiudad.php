<?php
    session_start();
    include_once("CiudadCollector.php");
    $id_ciudad = $_GET['ID'];
    $ciudadCollectorObj = new CiudadCollector();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Delete Ciudad</title>
    </head>
    <body>
        <?php
        $ciudadCollectorObj->deleteCiudad($id_ciudad);
        $mensaje = "LA CIUDAD SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readCiudad.php'>";
        ?>
    </body>
</html>
