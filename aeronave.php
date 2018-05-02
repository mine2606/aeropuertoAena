<?php

class Aeronave (){
    var $marca;
    var $modelo;
    var $plazas;


    function __construct ($marca, $modelo, $plazas){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->plazas = $plazas;
    }

    function setMarca ($marca){
        $this->marca = $marca;
    }
    function setModelo ($modelo){
        $this->modelo = $modelo;
    }

    function getMarca (){
        return $this->marca;
    }

    function getModelo (){
        return $this->modelo;
    }



}