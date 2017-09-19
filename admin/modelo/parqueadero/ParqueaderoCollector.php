<?php

    include_once('Parqueadero.php');
    include_once('../Collector.php');

    class ParqueaderoCollector extends Collector{

        function showParqueaderos() {
                $rows = self::$db->getRows("SELECT * FROM parqueadero ");
                $arrayParqueadero= array();        
                foreach ($rows as $c){
                    $aux = new Parqueadero($c{'id_parqueadero'},$c{'id_propietario'}, $c{'nombre'},$c{'direccion'},$c{'latitud'},$c{'longitud'},$c{'imagen'});
                    array_push($arrayParqueadero, $aux);
                }
                return $arrayParqueadero;        
        }
        
        function showParqueadero($id_parqueadero) {
                $row = self::$db->getRows("SELECT * FROM parqueadero WHERE id_parqueadero='$id_parqueadero'");
                    $aux = new Parqueadero($row[0]{'id_parqueadero'},$row[0]{'id_propietario'}, $row[0]{'nombre'},$row[0]{'direccion'},$row[0]{'latitud'},$row[0]{'longitud'},$row[0]{'imagen'});
                return $aux;        
        }
        
        function createParqueadero($id_propietario, $nombre,$direccion,$latitud,$longitud, $imagen){
                $rows = self::$db->insertRow("INSERT INTO parqueadero (nombre, direccion, latitud, longitud, id_propietario, imagen) VALUES ('$nombre', '$direccion', '$latitud', '$longitud', '$id_propietario', '$imagen')",null);
        
        }
        
        function updateParqueadero($id_parqueadero, $id_propietario, $nombre, $direccion, $latitud, $longitud, $imagen) {
                $rows = self::$db->updateRow("UPDATE parqueadero SET nombre='$nombre', direccion='$direccion', latitud='$latitud', longitud='$longitud', id_propietario='$id_propietario', imagen='$imagen' WHERE id_parqueadero='$id_parqueadero'",null);

        }
        
        function deleteParqueadero($id_parqueadero) {
                 $rows = self::$db->deleteRow("DELETE FROM parqueadero WHERE id_parqueadero=$id_parqueadero",null);


        }
        
        function validarParqueadero($nombre,$direccion){
                $rows = self::$db->getRows("SELECT * FROM parqueadero WHERE nombre='$nombre' AND direccion='$direccion'");
                foreach ($rows as $c){
                  $aux = new Parqueadero($c{'id_parqueadero'},$c{'nombre'},$c{'direccion'},$c{'latitud'},$c{'longitud'},$c{'imagen'});
                  return 1;
                }
                return 0;
          }    
        
          function buscarParqueadero($nombre) {
                $rows = self::$db->getRows("SELECT * FROM parqueadero WHERE nombre='$nombre'");               
                foreach ($rows as $c){
                  $aux = new Parqueadero($c{'id_parqueadero'},$c{'nombre'},$c{'direccion'},$c{'latitud'},$c{'longitud'},$c{'imagen'});
                  return 1;
                }
                return 0;          
            }
    }
?>