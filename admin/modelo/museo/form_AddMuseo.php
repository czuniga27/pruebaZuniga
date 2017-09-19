<?php
    session_start();
    include_once("MuseoCollector.php");
    $museoCollectorObj = new MuseoCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Museo</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>
<body>
   <?php require('../header.php');?>
   <div class="row ">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>AGREGAR MUSEO</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="saveMuseo.php">
            <div class="form-group">
                <label for="username">Nombre</label>
                <input type="text" class="form-control" name="NOmbre" placeholder="Nombre del Museo" required autofocus>
            </div>
            <div class="form-group">
                <label for="username">Id- Ciudad</label>
                <input type="text" class="form-control" name="id_ciudad" placeholder="Codigo ciudad" required autofocus>
            </div>
            
            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="readMuseo.php" class="btn btn-info pull-right">Salir</a>       
            </div>
        </form>
        </div>

      </div>

    </div>
  </div>
</body>
</html>
