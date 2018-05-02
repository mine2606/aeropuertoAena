<?php

class Pista (){

    var $longitud;
    var $orientacion;

   function __construct ($longitud, $orientacion){
       $this->longitud = $longitud;
       $this->orientacion = $orientacion;
   }
   
   
   
    function setLongitud ($longitud){
        $this->longitud = $longitud;
    }
    function setOrientacion ($orientacion){
        $this->orientacion = $orientacion;
    }
    function getLongitud (){
        return $tihis->longitud;
    }
    funtion getOrientacion (){
        return $this->orientacion;
    }
    



    
}