//Jugando con objetos en JavaScript

/*
Objeto JavaScript para alumno
propiedades    
    nombre
    apellido1
    apellido2
    fechaNacimiento
    dni
    curso
metodos
    nombreCompleto
    edad
    letraDNI
    validarDNI (TRWAGMYFPDXBNJZSQVHLCKE)
*/
function Alumno(nombre,
                apellido1,
                apellido2,
                fechaNacimiento,
                dni,    
                curso){
                    this.nombre = nombre;
                    this.apellido1 = apellido1;
                    this.apellido2 = apellido2;
                    this.fechaNacimiento = fechaNacimiento;
                    this.dni = dni;
                    this.curso = curso;
}

Alumno.prototype.nombreCompleto = function(){
                                return nombre + " " + apellido1 + " " + apellido2;
};

Alumno.prototype.edad = function(){
                        //anoActual=(new Date()).getFullYear;
                        return 2021 - fechaNacimiento.substr(-4);
};

String

Alumno.prototype.letraDNI = function(){
                            return dni.substr(-1);
};

Alumno.prototype.validarDNI = function(){
                            if(dni.length = 9 && "TRWAGMYFPDXBNJZSQVHLCKE"[dni.substr(0,8)%23] == this.letraDNI() ){
                            return "Validado";
    };
};                     
Alumno.prototype.toString = function(){return this.nombreCompleto()};

Alumno.prototype.presentacion = function(){return "Hola, mi nombre es " + this.nombreCompleto + ", nací el dia " + this.fechaNacimiento + 
                                                  ", mi DNI es <span ()>" + this.dni+ "</span> y estoy matriculado en " + this.curso +"."}

window.addEventListener("click", function(){

        var boton = document.getElementById("boton");
        boton.onclick=function(ev){
            ev.preventDefault();
       a
            var a = new Alumno(document.getElementById("Nombre").value, 
                            document.getElementById("Apellido1").value, 
                            document.getElementById("Apellido2").value,
                            document.getElementById("Edad"),
                            document.getElementById("DNI"), 
                            document.getElementById("Curso"));
        document.getElementById("contenedor").innerHTML = a.presentacion();
                        }
    });


/*function escribir() {
    document.write("hola");
    return "Hola, mi nombre es " + this.nombreCompleto + ", nací el dia " + this.fechaNacimiento + 
    ", mi DNI es <span>" + (this.dni) + "</span> y estoy matriculado en " + this.curso +"." ;
}*/

"Juana va al cine mañana"