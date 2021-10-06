<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php 
            require_once 'Librerias/28-09-2021_Libreria.php';
            $a = $_GET['a'];
            if(isset($a)){
            for ($i=1; $i <= 10; $i++) { 
                if($i <10){
                    if($a * $i   < 10){
                    echo $a . " *&nbsp&nbsp " . $i  . " = " . "&nbsp&nbsp".$a   * $i . "<br>";
                    }
                    if($a * $i >= 10){
                        echo $a . " *&nbsp&nbsp " . $i    . " = " . $a   * $i . "<br>";
                        }
                }
                if($i >= 10){
                echo $a . " * " . $i   . " = " . $a   * $i . "<br>";
                }
            }
        }
        echo floor(14/10);        ?>
    </body>
</html>