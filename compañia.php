<?php

class Compania {

    var $nombre;
    var $nSos;
    var $aeronaveOper;
   

    function __construct ($nombre, $nSos, $aeronaveOper) {
        $this->nombre;
        $this->nSos;
        $this->aeronaveOper;
    }
    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }
    function setFechaN ($nSos) {
        $this->nSos = $nSos;
    }
    function setAeronaveOper ($aeronaveOper) {
        $this->aeronaveOper = $aeronaveOper;
    }

    function getNombre () {
        return $this->nombre;
    }
    function getNSos () {
        return $this->nSos;
    }

    function getAeronaveOper() {
        return $this->aeronaveOper;
    }





}