<?php 
    function creaLinea($num1, $num2){
       
        return $num1 . " * " . justificaDerecha($num2,2) . " = " . justificaDerecha($num1 * $num2, 2);
    }

    function justificaDerecha($num, $cantidad){
        $separacion = $cantidad - str_pad(strval($num));
        return str_repeat("&nbsp" , $separacion) . $num;
    }