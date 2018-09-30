var selector = document.getElementById('inputCat');
var proyecto = document.getElementById('proyecto').value;
var prevencion = document.getElementById('prevencion').value
var salud = document.getElementById('salud').value;
var derecho = document.getElementById('derecho').value;
var diversidad = document.getElementById('diversidad').value;
var azar = document.getElementById('azar').value;


var boton = document.getElementById('boton');
boton.addEventListener("click", enviar);

function enviar() {
  if (selector.value == proyecto) {
    console.log("proyecto")
  }else if (selector.value == salud) {
    console.log("salud")
  }else if (selector.value == derecho) {
    console.log("derecho")
  }else if (selector.value == diversidad) {
    console.log("diversidad")
  }else if (selector.value == prevencion){
    console.log("prevencion")
  }else {
    console.log("azar");
  }
}
