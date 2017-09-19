<?php

    class Museo
    {
        private $id_museo;
        private $nombre;
        private $id_ciudad;
  

         function __construct($id_pago, $nombre, $id_ciudad) {
           $this->id_museo = $id_museo;
           $this->nombre = $nombre;
           $this->id_ciudad = $id_ciudad;
         }

         function set_id_museo($id_museo){
           $this->id_museo = $id_museo;
         } 
         function get_id_museo(){
           return $this->id_museo;
         }

         function set_nombre($nombre){
           $this->nombre = $nombre;
         } 
         function get_nombre(){
           return $this->nombre;
         }

         function set_id_ciudad($id_ciudad){
           $this->id_ciudad = $id_ciudad;
         } 
         function get_id_ciudad(){
           return $this->id_ciudad;
         } 

         
    }
?>
