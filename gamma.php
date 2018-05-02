<?php

require_once("Compania");

class Gamma extends Compania (){

    var $anoFundacion;

    function __construct ($nombre, $nSos, $aeronaveOper, $anoFundacion){

        parent::__construct($nombre, $nSos, $aeronaveOper);

        $this->anoFuncacion = $anoFundacion;
    }

    function setAnoFundacion ($anoFundacion){

        $this->anoFundacion = $anoFundacion;

    }

    function getAnofundacion(){

        return $this->anoFundacion;

    }
