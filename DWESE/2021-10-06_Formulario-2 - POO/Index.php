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
      
        if (isset($_POST["boton"])) {
            $errores = [];
            $errores = validaForm($_POST);
            creaForm($errores); 
        }else{
            creaFormIni();
        }

        function creaForm(array $errores ){
            echo "  <form action=\"\" method=\"post\">
                        <table>
                            <tr>
                                <td>Nombre:</td>
                                <td><input type=\"text\" name=\"nombre\" value="; if(isset($errores["nombre"])){
                                                                                        echo "\"\"";
                                                                                    }else {
                                                                                        echo $_POST["nombre"];
                                                                                
                                                                                    }
                            echo "></td>
                            </tr>    
                            <tr>
                                <td>Apellidos:</td>
                                <td><input type=\"text\" name=\"apellidos\" value="; if(isset($errores["apellidos"])){
                                                                                    echo "\"\"";
                                                                                }else {
                                                                                    echo $_POST["apellidos"];
                                                                            
                                                                                }
                            echo "></td>
                            </tr>
                            <tr>
                                <td>Fecha Nacimiento::</td>
                                <td><input type=\"text\" name=\"fechaNac\" maxlength=\"10\" value="; if(isset($errores["fechaNac"])){
                                                                                                        echo "\"\"";
                                                                                                    }else {
                                                                                                        echo $_POST["fechaNac"];
                                                                                                
                                                                                                    }
                            echo "></td>
                            </tr>
                            <tr>
                                <td>DNI:</td>
                                <td><input type=\"text\" name=\"dni\" maxlength=\"9\" value ="; if(isset($errores["dni"])){
                                                                                                    echo "\"\"";
                                                                                                }else {
                                                                                                    echo $_POST["dni"];
                                                                                            
                                                                                                }
                            echo "></td>
                            </tr>
                            <tr>
                                <td>Correo electr&oacute;nico:</td>
                                <td><input type=\"text\" name=\"email\" value="; if(isset($errores["email"])){
                                                                                    echo "\"\"";
                                                                                }else {
                                                                                    echo $_POST["email"];
                                                                            
                                                                                }
                            echo "></td>
                            </tr>
                            <tr>
                                <td>P&aacute;gina WEB:</td>
                                <td><input type=\"text\" name=\"url\" value=";  if(isset($errores["url"])){
                                                                                    echo "\"\"";
                                                                                }else {
                                                                                    echo $_POST["url"];
                                                                            
                                                                                }
                                                                            
                            echo "></td>
                            </tr>
                            <tr>    
                                <td><input type=\"submit\" name=\"boton\" value=\"Te digo tu nombre\"></td>
                                <td>DWESE <input type=\"checkbox\" name=\"modulos[]\" value=\"DWES\" ";  if(isset($_POST['modulos']) && in_array("DWES",$_POST['modulos'])){
                                                                                                    echo "checked=\"checked\"" ;}
                            echo" /></td>
                                <td>DWECL<input type=\"checkbox\" name=\"modulos[]\" value=\"DWECL\" "; if(isset($_POST['modulos']) && in_array("DWECL",$_POST['modulos'])){
                                                                                                    echo "checked=\"checked\"" ;}
                            echo "/></td>
                            </tr>
                        </table>
                    </form>";
        }
            
        function creaFormIni(){
            echo "  <form action=\"\" method=\"post\">
                        <table>
                            <tr>
                                <td>Nombre:</td>
                                <td><input type=\"text\" name=\"nombre\" value=\"\"";
                            echo "></td>
                            </tr>    
                            <tr>
                                <td>Apellidos:</td>
                                <td><input type=\"text\" name=\"apellidos\" value=\"\"";
                            echo "></td>
                            </tr>
                            <tr>
                                <td>Fecha Nacimiento::</td>
                                <td><input type=\"text\" name=\"fechaNac\" maxlength=\"10\" value=\"\"";
                            echo "></td>
                            </tr>
                            <tr>
                                <td>DNI:</td>
                                <td><input type=\"text\" name=\"dni\" maxlength=\"9\" value =\"\"";
                            echo "></td>
                            </tr>
                            <tr>
                                <td>Correo electr&oacute;nico:</td>
                                <td><input type=\"text\" name=\"email\" value=";
                            echo "></td>
                            </tr>
                            <tr>
                                <td>P&aacute;gina WEB:</td>
                                <td><input type=\"text\" name=\"url\"></td>
                            </tr>
                            <tr>    
                                <td><input type=\"submit\" name=\"boton\" value=\"Te digo tu nombre\"></td>
                                <td>DWESE <input type=\"checkbox\" name=\"modulos[]\" value=\"DWES\" /></td>
                                <td>DWECL <input type=\"checkbox\" name=\"modulos[]\" value=\"DWECL\" /></td>
                            </tr>
                        </table>
                    </form>";
        }
        

          
         

        if (isset($_POST["boton"])) {
              
           
            if (count($errores) == 0) {
                
                pintaNombre($_POST);
            }else {
                foreach ($errores as $key => $value) {
                    echo "<p style=\"color:red\">{$key} => {$value} </p><br>";
                }
            }
        }
           /* if (isset($_POST["botonCaps"])) {
                $_POST["nombre"] = strtoupper($_POST["nombre"]);
                $_POST["apellidos"] = strtoupper($_POST["apellidos"]);
                validaNombre($_POST["nombre"],$_POST["apellidos"]);
            }*/
            
            function validaForm(array $formulario ){
               $errores2 =[];
                
                if( $_POST["nombre"] == ""){
                        $errores2["nombre"] = "Error: Campo \"Nombre\" vacio.";
                }
                if ( $_POST["apellidos"] == "") {
                        $errores2["apellidos"] = "Error: Campo \"Apellido\" vacio.";
                }
                if ( $_POST["dni"] == "") {
                    $errores2["dni"] = "Error: Campo \"DNI\" vacio.";
                }
                if ( $_POST["fechaNac"] == "") {
                    $errores2["fechaNac"] = "Error: Campo \"Fecha de Nacimiento \" vacio.";
                }
                if ( $_POST["email"] == "") {
                    $errores2["email"] = "Error: Campo \"Correo electronico\" vacio.";
                } 
                if ( $_POST["url"] == "") {
                    $errores2["url"] = "Error: Campo \"P&aacute;gina WEB\" vacio.";
                } 
                if ( $_POST["fechaNac"] == "") {
                    $errores2["fechaNac"] = "Error: Campo \"Fecha de Nacimiento \" vacio.";
                }    
                if (preg_match("*[0-9]*", $_POST["nombre"])) {
                        $errores2["nombre"] = "Error: Dudo que tu nombre tenga números.";
                }
                if (preg_match("*[0-9]*", $_POST["apellidos"])) {
                        $errores2["apellidos"] = "Error: Dudo que tus apellidos tenga números.";
                }
                if (preg_match("/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])\2(\d{4})$/", $_POST["fechaNac"])){
                        $errores2["fechaNac"] = "Error: Fecha incorrecta."; 
                }
                if (strlen($_POST["fechaNac"]) > 10) {
                        $errores2["fechaNac"] = "Error: Te agradecería que no tocaras el HTML, por favor.";
                }
                if (strlen($_POST["fechaNac"]) < 9) {
                    $errores2["fechaNac"] = "Error: Formato de fecha incorrecta.";
                }
                if (preg_match("^\d{8}[a-zA-Z]{1}$^", $_POST["dni"]) == 0) {
                        $errores2["dni"] = "Error: DNI incorrecto.";
                }
                if (!$_POST["email"] == filter_var($_POST["email"], FILTER_VALIDATE_EMAIL )){
                        $errores2["email"] = "Error: Correo electr&oacute;nico inv&aacute;lido.";
                }
                if (!$_POST["url"] == filter_var($_POST["url"], FILTER_VALIDATE_URL )) {
                        $errores2["url"] = "Error: P&aacute;gina WEB inv&aacute;lida.";
                }
                return $errores2;
    
             }
            function pintaNombre(array $array){
                if (isset($_POST["boton"])) {
                    echo "<p> Te llamas " . $array["nombre"] . " " . $array["apellidos"] .".</p>";
                    echo "<p>Nacistes el dia " . $array["fechaNac"] . "</p>";
                    echo "<p>Tu dni es " . $array["dni"] . "</p>";
                    echo "<p>Tu correo electronico es " . $array["email"] ."</p>";
                    echo "<p>Tu p&aacute;gina WEB es " . $array["url"] . ".</p>";
                    if(isset($_POST['modulos']) && in_array("DWES",$_POST['modulos']))
                        echo "<p>Estas matriculado en Desarollo de servidor.</p>";
                    if(isset($_POST['modulos']) && in_array("DWECL",$_POST['modulos']))
                        echo "<p>Estas matriculado en Desarollo en cliente.</p>";
                }
            }
        ?>
    </body>
</html>