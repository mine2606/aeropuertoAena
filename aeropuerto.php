<?php

require_once("Agencia");

class Aeropuerto {  

    var $dI;
    var $latitud;
    var $longitud;
    var $pista; 
    var $tienda;

    function __construct ($dI, $latitud, $longitud, $pista, $tienda) {
        $this->dI = $dI;
        $this->latitud = $latitud;
        $this->longitud = $longitud;
        $this->pista = $pista;
        $this->tienda = $tienda;

    }
    function setDI ($dI) {
        $this->dI = $dI;
    }
    function setLatitud ($latitud) {
        $this->latitud = $latitud;
    }
    function setLongitud ($longitud) {
        $this->longitud = $longitud;
    }
    function setPista ($pista) {
        $this->pista = $pista;
    }
    function setTienda ($tienda) {
        $this->tienda = $tienda;
    }



    function getDI () {
        return $this->dI;
    }
    function getLatitud () {
        return $this->latitud;
    }

    function getLongitud() {
        return $this->longitud;
    }
    function getPista () {
        return $this->pista;
    }

    function getTienda() {
        return $this->tienda;
    }






}