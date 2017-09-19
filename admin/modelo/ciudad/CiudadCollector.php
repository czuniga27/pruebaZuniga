<?php

    include_once('Ciudad.php');
    include_once('../Collector.php');

    class CiudadCollector extends Collector{

        function showCiudad() {
                $rows = self::$db->getRows("SELECT * FROM ciudad ");
                $arrayCiudad= array();        
                foreach ($rows as $c){
                    $aux = new Ciudad($c{'id_ciudad'},$c{'nombre'});
                    array_push($arrayCiudad, $aux);
                }
                return $arrayCiudad;        
        }

        function showCiudads($id_ciudad) {
                $rows = self::$db->getRows("SELECT * FROM ciudad WHERE id_ciudad=$id_ciudad");
                $aux = new Ciudad($rows[0]{'id_ciudad'},$rows[0]{'nombre'});
                return $aux;        
        }
        
        function createCiudad($nombre){
                $rows = self::$db->insertRow("INSERT INTO ciudad (nombre) VALUES ('$nombre')",null);
        
        }
        
        function updateCiudad($id_ciudad, $nombre) {
                $rows = self::$db->updateRow("UPDATE ciudad SET nombre='$nombre' WHERE id_ciudad='$id_ciudad'",null);

        }
        
        function deleteCiudad($id_ciudad) {
                 $rows = self::$db->deleteRow("DELETE FROM ciudad WHERE id_ciudad=$id_ciudad",null);


        }
        
        function validarCiudad($nombre){
                $rows = self::$db->getRows("SELECT * FROM ciudad WHERE nombre='$nombre'");
                foreach ($rows as $c){
                  $aux = new Ciudad($c{'id_ciudad'},$c{'nombre'});
                  return 1;
                }
                return 0;
          }    
        
          function buscarCiudad($nombre) {
                $rows = self::$db->getRows("SELECT * FROM ciudad WHERE nombre='$nombre'");               
                foreach ($rows as $c){
                  $aux = new Ciudad($c{'id_ciudad'},$c{'nombre'});
                  return 1;
                }
                return 0;          
            }
    }
?>
