<?php
if(isset($_GET["fallo"])){
            echo " <p style=\"color:red\">Al menos pon tu nombre</p>";
        }
if(isset($_GET["nombre"])){
    echo " <p>Te llamas " . $_GET["nombre"] . " " . $_GET["apellidos"] . "</p>";
}
