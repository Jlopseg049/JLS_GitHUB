<?php
$a = ["hola",2,3,4];
$b = 1;
var_dump($a);
function miVarDump($var){
    echo "<small>" . $_SERVER['PHP_SELF'] . "</small>" ;
    if (gettype($var) == "array") {
        echo "<br>" . "<b>" . gettype($var) . "</b>" . "<i>(size=" . count($var) . ")</i>";
        for ($i=0; $i < count($var) ; $i++) { 
            echo "<br>";
            echo $i ."<font color=\"#888a85\"> =&gt </font> " . gettype($var[$i]) . " <font color=\"#4e9a06\">" . $var[$i] . "</font>"  ;
            
        }
    }
  
}
miVarDump($a);