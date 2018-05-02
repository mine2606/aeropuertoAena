<?php

require_once("Empleado.php");



class AltaDireccion extends Empleado{

    var $numacciones;



    function __construct ($nombre, $fechaN, $numacciones){
        parent::__construct($nombre, $fechaN);
        $this->numacciones = $numacciones;

    }    

     

    function getNumacciones (){

        return $this->numacciones;

    }



    function setNumacciones ($numacciones){

        $this->numacciones = $numacciones;

    }

}
