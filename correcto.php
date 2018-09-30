<?php
namespace Cresi;
require dirname( __FILE__ ) . '/bootstrap.php';
// $_SESSION['correctas'][$i] = $id_pregunta;        //terminar //contador de respuestas correctas respondidas
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <title>Document</title>
</head>
<body>
  <div class="header">
    <center><img src="img/logo.png" id="icono" class="icono" height="70" /></center>
  </div>
  <div class="respuesta">
    <p class="incorrecto text-center">Correcto</p>
  </div>
  <center><a class="btn btn-primary boton" href="ruleta.html">Continuar</a></center>
</body>
</html>
