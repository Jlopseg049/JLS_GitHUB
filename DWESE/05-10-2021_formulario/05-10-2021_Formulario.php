<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>    
    </head>
    <body>
        <form action="procesa.php" method="post">
            <input type="text" name="nombre">
            <input type="text" name="apellidos">

            <input type="submit" name="boton" value="Enviar datos">
        </form>
        <?php
        include_once 'mensajes.php';
        ?>
    </body>
</html>