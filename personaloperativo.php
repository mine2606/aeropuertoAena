<?php



require_once("Empleado.php");



class PersonalOperativo extends Empleado{

    var $terminal;



    function __construct ($nombre, $fechaN, $terminal){
        parent::__construct ($nombre, $fechaN);
        $this->numterminal = $terminal;

    }    

     

    function getTerminal (){

        return $this->terminal;

    }



    function setTerminal ($terminal){

        $this->terminal = $terminal;

    }

}