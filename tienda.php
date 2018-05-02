<?php

require_once ("aeropuerto.php");



class Tienda (){
    var $nombre;
    var $numeroLocal;
    var $metrosCuadradros;



    function __construct ($nombre, $numeroLocal, $metrosCuadrados) {
        $this->nombre = $nombre;
        $this->numeroLocal = $numeroLocal;
        $this->metrosCuadrados = $metrosCuadrados;
    }

    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }
    function setNumeroLocal ($numeroLocal) {
        $this->numeroLocal = $numeroLocal;
    }
    function setMetroscuadrados ($metrosCuadrados) {
        $this->metrosCuadrados = $metrosCuadrados;
    }

    function getNombre() {
        return $this->nombre;
    }
    function getNumeroLocal () {
        return $this->numeroLocal;
    }

    function getMetroCuadrados() {
        return $this->metrosCuadrados;
    }







}