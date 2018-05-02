<?php
require_once("Agencia");
require_once("Aeropuerto");

class Internacional extends Aeropuerto{

    var $numeroTerminales;
    var $numeropistas;



    function __construct ($dI, $latitud, $longitud, $pista, $tienda, $numeroTerminales, $numeropistas){

        parent::__construct($dI, $latitud, $longitud, $pista, $tienda);
        $this->numeroTerminales = $nTerminales;
        $this->pistas = $pistas;
    }

    function setNumeroTerminales ($numeroTerminales){
        $this->numeroTerminales = $numeroTerminales;
    }

    function setPistas ($pistas){
        $this->pistas = $pistas;
    }

    function getNumeroTerminales (){
        return $this->numeroTerminales;
    }
    function getPistas (){
        return $this->pistas;
    }
    






}