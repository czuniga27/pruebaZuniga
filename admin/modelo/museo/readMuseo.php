<?php
    session_start();
    include_once("MuseoCollector.php");
    $museoCollectorObj = new MuseoCollector();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>MUSEO</title>
    <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href='https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
</head>
<body>
  <?php require('../header.php');?>  
  <div class="row">    
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>MUSEO</span>
       </strong>
         <a href="../../admin.php" class="btn btn-danger pull-right">ATRAS</a> 
         <a href="form_AddMuseo.php" class="btn btn-info">AGREGAR MUSEO</a>
      </div>
     <div class="panel-body">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="80%">
        <thead>
            <tr>
                <th>ID</th>   
                <th>NOMBRE</th>
                <th>ID-CIUDAD</th>
                <th>OPERACIONES</th>
            </tr>
        </thead>
        <?php
            foreach ($museoCollectorObj->showMuseo() as $c){
            echo "<tr>";
            echo "<td>" . $c->get_id_museo() . "</td>";         
            echo "<td>" . $c->get_nombre() . "</td>";   
            echo "<td>" . $c->get_id_ciudad() . "</td>";
            echo "<td><a href='form_EditMuseo.php?id_museo=". $c->get_id_museo() ." & nombre=". $c->get_nombre() ." & id_ciudad=". $c->get_id_ciudad()."' class='btn btn-xs btn-warning' data-toggle='tooltip' title='Editar'><i class='glyphicon glyphicon-pencil'></i>
                </a> <a href='deleteMuseo.php?ID=". $c->get_id_museo() ."' class='btn btn-xs btn-danger' data-toggle='tooltip' title='Eliminar'><i class='glyphicon glyphicon-remove'></i>
                </a></td>"; 
            echo "</tr>"; 
            }
        ?>
    </table>
    </div>
    </div>
  </div>
</div>
</body>
</html>
