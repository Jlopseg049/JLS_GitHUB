//Función pow que pasado dos números eleva el primero al segundo.

function cuadrado(a, b) {
return Math.pow(a,b);} 

//Función que dado un número entero y un número de caracteres devuelve una cadena con ese número completado con 0

function numcon0(a, b) {
charac=b-(a + "").length;
Cadena1="";
for(let i = 0; i< charac; i ++ ) {
Cadena1=Cadena1+"0";
} 
return Cadena1+(a+""); 
}
//Función que pasado el año de nacimiento me devuelva si soy mayor de edad. 

function mayorEdad(a) {
return "Eres "  + ((2021 - a) >= 18 ? "mayor ":"menor ") + "de edad" ;
} 

//Función que admita uno o dos parámetros, el primero es el año de nacimiento, el segundo, es el año actual, por defecto 2011 y que me diga si soy mayor de edad o no

function mayorEdad2(a, b=2011) {
return "Eres "  + ((b - a) >=18 ? "mayor ":"menor ") + "de edad" ;
} 

//Función que me devuelve la media de los valores pasados

function avg(a) {
suma=0;
for(let i = 0; i< arguments.length; i++ ){
suma+= arguments[i];
}
return ((suma==0 ) ? 0 :(suma / arguments.length));
}
//Función min que devuelve la media de los valores pasados
//Funcion que devuelve un array con los valores pasados ordenados

