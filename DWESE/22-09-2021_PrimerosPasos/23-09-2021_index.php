<?php
$a=1;

echo $a === 1 . " <br>";


echo $a == false . " <br>";


echo $a++ == 2 . " <br>";

$a=1;
echo --$a  == false ; 

//Variables super globales
echo $_SERVER['SERVER_ADDR'];
echo $_SERVER['SERVER_NAME'];   
echo $_SERVER['REQUEST_METHOD'];
$_GET[]