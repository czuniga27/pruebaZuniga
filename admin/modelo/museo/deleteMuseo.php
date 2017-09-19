<?php
    session_start();
    include_once("MuseoCollector.php");
    $id_museo = $_GET['ID'];
    $museoCollectorObj = new MuseoCollector();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Delete MUSEO</title>
    </head>
    <body>
        <?php
        $museoCollectorObj->deleteMuseo($id_museo);
        $mensaje = "EL MUSEO SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readMuseo.php'>";
        ?>
    </body>
</html>
