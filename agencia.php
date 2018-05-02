<?php

require_once("AltaDireccion.php");
require_once("ControlAereo.php");
require_once("PersonalOperativo.php");
require_once("Aeropuerto.php");
require_once("Empleado.php");
require_once("Internacional.php");
require_once("CompaniaAerea.php");
require_once("Alpha.php");
require_once("Gamma.php");




class Agencia {

    var $nombre;
    var $empleados;
    var $aeropuertos;
    var $companiasaereas;
    

    function __construct ($nombre) {
        $this->nombre = $nombre;
        $this->empleados = array();
        $this->aeropuertos = array();
        $this->companiasaereas = array();
       
    }
    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }
    function getNombre ($nombre) {
        return $this->compania;
    

    
        function altaEmpleado ($empleado){

            $enc = false;    
            for ($i = 0; (($i < count($this->empleados)) && ($enc == false)); $i++){    
                if ($this->empleados[$i] == null){    
                    $this->empleados[$i] = $empleado;    
                    $enc = true;    
                }
    
            
                else {                    
                    array_unshift($this->empleados, $empleado);
                    
                }
            }
        }   
        function altaAeropuerto($aeropuerto){

            $this->aeropuertos[]=$aeropuerto;
    
        }
    
    
    
        function altaCompania($compania){
    
            $this->compania[]=$compania;
    
        } 
            
             


    function bajaEmpleado ($nombre){
        $enc=false;
        for (i=0; i<count($this->empleados) && ($enc==false); i++){ 
             if ($this->empleados[$i]!= null){              
                if($nombre==$this->empleados[$i]->getNombre()){ 
                    $this->empleado[$i]=null; 
                    $enc=true;
                }
            }
         }

    }

    function altaVuelo ($dI){
        $enc = false;    
            for ($i = 0; (($i < count($this->vuelo)) && ($enc == false)); $i++){    
                if ($this->iD[$i] == null){    
                    $this->vuelos->altaVuelo();   
                    $enc = true;   
                }
            }
    }


    function altaPista (){
        
    }

    function altaVuelo (){
        
    }


    function listaEmpleados (){

    }

    

    function pistaMasLarga ($pista){
        $maximo=0;
        $pos=0;
        for($i=0; $i> count($this->pista); $i++){
            $maximo=$this->pista->$longitud;
            $pos=$i;
        }

    }

    function vuelosUltimoMes ($dI){

    }





}