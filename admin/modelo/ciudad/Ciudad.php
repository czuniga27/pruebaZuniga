<?php

    class Ciudad
    {
        private $id_ciudad;
        private $NOMBRE;
        
  

         function __construct($id_ciudad, $nombre) {
           $this->id_ciudad = $id_ciudad;
           $this->nombre = $nombre;
         }

         function set_id_ciudad($id_ciudad){
           $this->id_ciudad = $id_ciudad;
         } 
         function get_id_ciudad(){
           return $this->id_ciudad;
         }

         function set_nombre($nombre){
           $this->nombre = $nombre;
         } 
         function get_nombre(){
           return $this->nombre;
         }

         
    }
?>
