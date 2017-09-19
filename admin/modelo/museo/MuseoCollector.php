<?php

    include_once('Museo.php');
    include_once('../Collector.php');

    class MuseoCollector extends Collector{

        function showMuseo() {
                $rows = self::$db->getRows("SELECT * FROM museo ");
                $arrayMuseo= array();        
                foreach ($rows as $c){
                    $aux = new Museo($c{'id_museo'},$c{'nombre'}, $c{'id_ciudad'});
                    array_push($arrayMuseo, $aux);
                }
                return $arrayMuseo;        
        }



        function showMuseoU($id_museo) {
                $rows = self::$db->getRows("SELECT * FROM museo WHERE id_museo=$id_museo");
                $aux = new Museo($rows[0]{'id_museo'},$rows[0]{'nombre'},$rows[0]{'id_ciudad'});
                return $aux;        
        }
        
        function createMuseo($nombre,$id_ciudad){
                $rows = self::$db->insertRow("INSERT INTO museo (nombre, id_ciudad) VALUES ('$nombre', '$id_ciudad')",null);
        
        }
        
        function updateTipopago($id_pago, $descripcion, $estado) {
                $rows = self::$db->updateRow("UPDATE tipo_pago SET descripcion='$descripcion', estado='$estado' WHERE id_pago='$id_pago'",null);

        }
        
        function deleteMuseo($id_museo) {
                 $rows = self::$db->deleteRow("DELETE FROM museo WHERE id_museo=$id_museo",null);


        }
        
        function validarTipopago($descripcion,$estado){
                $rows = self::$db->getRows("SELECT * FROM tipo_pago WHERE descripcion='$descripcion' AND estado='$estado'");
                foreach ($rows as $c){
                  $aux = new Tipopago($c{'id_pago'},$c{'descripcion'},$c{'estado'});
                  return 1;
                }
                return 0;
          }    
        
          function buscarTipopago($descripcion) {
                $rows = self::$db->getRows("SELECT * FROM tipo_pago WHERE descripcion='$descripcion'");               
                foreach ($rows as $c){
                  $aux = new Tipopago($c{'id_pago'},$c{'descripcion'},$c{'estado'});
                  return 1;
                }
                return 0;          
            }
    }
?>
