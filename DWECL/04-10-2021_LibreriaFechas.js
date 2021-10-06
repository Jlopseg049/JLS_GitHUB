String.prototype.toDate = function(){
 this = new date;
}

String.prototype.validaFecha = function() {
  var respuesta = false;
  var partes = this.split("/");
  if(partes.length == 3){
      var fecha = new Date( partes[2], partes[1] - 1, partes[0])
  }  
}


function validaFecha(fecha) {
    if(fecha.getTime() <= (01 + "/" + fecha.getMonth() + "/" + fecha.getFullYear).getTime());
}