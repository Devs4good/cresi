let reloj;
let contador = 14;
let c = document.getElementById('contador');

function detenerse() {
  clearInterval(reloj);
  c.style.visibility = "hidden";
  window.location.assign("incorrecto.php");
}

setTimeout(detenerse, 16000);

reloj = setInterval(function() {
  c.innerHTML = contador;
  contador--;
}, 1000);
