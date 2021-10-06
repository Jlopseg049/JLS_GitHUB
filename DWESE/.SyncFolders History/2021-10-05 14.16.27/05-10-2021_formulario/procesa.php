<?php

   if (isset($_POST["boton"])) {
        validaNombre($_POST["nombre"],$_POST["apellidos"]);
    }

    function validaNombre(String $nombre, String $Apellidos){
        if ($_POST["nombre"] == "") {
          header("location:05-10-2021_Formulario.php");
        }else{
        echo "Te llamas " . $_POST["nombre"] . " " . $_POST["apellidos"];
    }
    }

