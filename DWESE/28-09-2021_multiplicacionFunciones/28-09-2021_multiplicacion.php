<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <?php 
             require_once 'Librerias/28-09-2021_Libreria.php';
             include_once '..\29-09-2021_Funciones2\Libreria\29-09-2021_libreria.php';
        ?>
    </head>
    <body>
        <?php 
           
            $a = $_GET['a'];
            if(isset($a)){
            for ($i=1; $i <= 10; $i++) { 
            echo estilosa(creaLinea($a, $i),2);
            }
        }
              ?>
    </body>
</html>