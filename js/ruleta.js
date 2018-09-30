let angulo = 0;
var repeticion = setInterval(rotateObject, 1);
var categoria;
function rotateObject() {
  angulo ++;
  $("#ruleta").rotate(angulo);
  if (angulo >360) {
    angulo = 0;
  }
};

function parar (){
  clearInterval(repeticion);
  if ((angulo>=0) && (angulo<=59)) {
    cartelera.innerHTML = "Derecho";
    setInterval(openQuestion, 2000);
  }else if ((angulo>=60) && (angulo<=119)) {
    cartelera.innerHTML = "Proyecto";
    setInterval(openQuestion, 2000);
  }else if ((angulo>=120) && (angulo<=179)) {
    cartelera.innerHTML = "Prevención";
    setInterval(openQuestion, 2000);
  }else if ((angulo>=180) && (angulo<=239)) {
    cartelera.innerHTML = "Salud";
    setInterval(openQuestion, 2000);
  }else if ((angulo>=240) && (angulo<=299)) {
    cartelera.innerHTML = "Diversidad";
    setInterval(openQuestion, 2000);
  }else if ((angulo>=300) && (angulo<=359)) {
    cartelera.innerHTML = "¿Qué es?";
    setInterval(openQuestion, 2000);
  }

  categoria = cartelera.innerHTML;
}

function openQuestion() {
    window.location.assign("pregunta.php?categoria=" + categoria);
};

var ruleta = document.getElementById('ruleta');
ruleta.addEventListener("click", parar);
let cartelera = document.getElementById('cat');
