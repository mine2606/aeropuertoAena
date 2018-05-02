<?php

require_once("Compania");

class Alpha extends Compania (){

    var $codAereo;

    function __construct ($nombre, $nSos, $aeronaveOper, $codAereo){

        parent::__construct($nombre, $nSos, $aeronaveOper);

        $this->codAereo = $codAereo;
    }

    function setCodAereo ($codAereo){

        $this->codAereo = $codAereo;

    }

    function getCodAereo (){

        return $this->codAereo;

    }












    
}