<?php

  

class Empleado {

    var $nombre;
    var $fechaN;
    

    function __construct ($nombre, $fechaN) {
        $this->nombre = $nombre;
        $this->fechaN = $fechaN;
        
    }
    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }
    function setfechaN ($fechaN) {
        $this->fechaN = $fechaN;
    }
    

    function getNombre () {
        return $this->nombre;
    }
    function getFechaN () {
        return $this->fechaN;
    }

    





}