<?php

    class Alumno{
        
        //Parámetros:
   
            private $nombre,
            private $apellido,
            private $fechaNac,
            private $dni,
            private $paginaWEB,
            private $asignaturas = [];
       

        //Setters y Getters:

        public function __get($property){
            if(property_exists($this, $property)) {
                return $this->$property;
            }
        }
        
        public function __set($property, $value){
            if(property_exists($this, $property)) {
                $this->$property = $value;
            }
        }
        
        //Constructor
       
        public function __construct($nombre,$apellido, $fechaNac, $dni, $paginaWEB, $asignaturas){
            $this-> nombre = $nombre;
            $this-> apellido = $apellido;
            $this-> fechaNac = $fechaNac;
            $this-> dni = $dni;
            $this-> paginaWEB = $paginaWEB;
            $this-> asignaturas = $asignaturas;
        }
        
        //Métodos:

        public static insertarAlumno(){
            $errores = [];
            if (isset($_POST["boton"])) {
                $errores = validaForm($_POST);
                if ($errores == []) {
                    
                    new Alumno()

                }
            }   
            function creaForm($errores);
                
        }

        public function creaForm($errores){
            echo "  <form action=\"\" method=\"post\">
                            <table>
                                <tr>
                                    <td>Nombre:</td>
                                    <td><input type=\"text\" name=\"nombre\" value="; if(isset($errores["nombre"])){
                                                                                            echo "\"\"";
                                                                                        }else if(isset($_POST["nombre"])) {
                                                                                            echo $_POST["nombre"];                                                    
                                                                                        }else {
                                                                                            echo "\"\"";
                                                                                        }
                                echo "></td>
                                </tr>    
                                <tr>
                                    <td>Apellidos:</td>
                                    <td><input type=\"text\" name=\"apellidos\" value="; if(isset($errores["apellidos"])){
                                                                                        echo "\"\"";
                                                                                    }else if(isset($_POST["apellidos"])) {
                                                                                        echo $_POST["apellidos"];                                                    
                                                                                    }else {
                                                                                        echo "\"\"";
                                                                                    }
                                echo "></td>
                                </tr>
                                <tr>
                                    <td>Fecha Nacimiento::</td>
                                    <td><input type=\"text\" name=\"fechaNac\" maxlength=\"10\" value="; if(isset($errores["fechaNac"])){
                                                                                                            echo "\"\"";
                                                                                                        }else if(isset($_POST["fechaNac"])) {
                                                                                                            echo $_POST["fechaNac"];                                                    
                                                                                                        }else {
                                                                                                            echo "\"\"";
                                                                                                        }
                                echo "></td>
                                </tr>
                                <tr>
                                    <td>DNI:</td>
                                    <td><input type=\"text\" name=\"dni\" maxlength=\"9\" value ="; if(isset($errores["dni"])){
                                                                                                        echo "\"\"";
                                                                                                    }else if(isset($_POST["dni"])) {
                                                                                                        echo $_POST["dni"];                                                    
                                                                                                    }else {
                                                                                                        echo "\"\"";
                                                                                                    }
                                echo "></td>
                                </tr>
                                <tr>
                                    <td>Correo electr&oacute;nico:</td>
                                    <td><input type=\"text\" name=\"email\" value="; if(isset($errores["email"])){
                                                                                        echo "\"\"";
                                                                                    }else if(isset($_POST["email"])) {
                                                                                        echo $_POST["email"];                                                    
                                                                                    }else {
                                                                                        echo "\"\"";
                                                                                    }
                                echo "></td>
                                </tr>
                                <tr>
                                    <td>P&aacute;gina WEB:</td>
                                    <td><input type=\"text\" name=\"url\" value=";  if(isset($errores["url"])){
                                                                                        echo "\"\"";
                                                                                    }else if(isset($_POST["url"])) {
                                                                                        echo $_POST["url"];                                                    
                                                                                    }else {
                                                                                        echo "\"\"";
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
        public function validaForm(array $formulario ){
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
             return $e
          }
    }