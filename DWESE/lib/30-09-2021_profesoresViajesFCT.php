<?php 
$vProf = ["1","2","3","4","5","6","7","8","9", "10","11","12","13","14","15","16","17","19","20","21","22","23","24","25"];
$vRoma = ["1","2","3","4","5","6","7","8","9"];
$vPolonia = ["10","11","1","13","12","14","15","16","17","19","6","3"];
$vDublin = array_diff($vProf,$vRoma,$vPolonia);

$viajes = array_merge($vRoma,$vPolonia);
$cuentaViajes = array_count_values($viajes);
var_dump($cuentaViajes);