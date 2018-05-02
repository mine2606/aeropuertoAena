<?php

require_once ("agencia.php");

$agen1 = new Agencia ("AENA");

$e1 = new Empleado ("Marcos", 15-03-1970);
$e2 = new Empleado ("Claudio", 14-08-1967);
$e3 = new Empleado ("Soledad", 26-06-1993);

$agen1->altaEmpleado($c1);
$agen1->altaEmpleado($c2);
$agen1->altaEmpleado($c3);



$agen1->bajaCliente();
$gaso1->bajaEmpleado("Marcos");



$e4 = new AltaDireccion ("Jorge", 15-03-1970; 777);
$agen1->altaDireccion($e4);
$e5 = new ControlAereo ("Leandro", 26-01-1985, 8);
$agen1->altaControAereo($e5);
$e6 = new PersonalOperativo ("Candi", 25-12-1983);
$agen1->altaPersonalOperativo($e6);




