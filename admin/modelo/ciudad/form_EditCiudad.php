<?php
    session_start();
    include_once("CiudadCollector.php");
    $ciudadCollectorObj = new CiudadCollector();
    $id_ciudad = $_GET['id_ciudad'];
    $nombre = $_GET['nombre'];
    //$estado = $_GET['estado'];
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Editar Tipo Pago</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>
</head>
<body>
   <?php require('../header.php');?>
   <div class="row ">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>EDITAR CIUDAD</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="updateCiudad.php?nombre=<?php $nombre?>">
            <div class="form-group">
                <label for="username">ID</label>
                <input type="text" class="form-control" name="id_ciudad" required value=<?php echo "$id_ciudad"; ?>>
            </div>  
            <div class="form-group">
                <label for="username">Nombre</label>
                <input type="text" class="form-control" name="ciudadModificado" required value="<?php echo $nombre; ?>">
            </div>
             
            <div class="form-group clearfix">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="readCiudad.php" class="btn btn-info pull-right">Salir</a>       
            </div>
        </form>
        </div>

      </div>

    </div>
  </div>
</body>
</html>
