<?php
//selector
$selector = $_POST['inputCat'];
$proyecto = "Proyecto";
$prevencion = "Prevencion";
$salud = "Salud";
$derecho = "Derecho";
$diversidad = "Diversidad";

//$categoria = $_REQUEST['categoria'];

//inputs
$pregunta = $_REQUEST['pregunta'];
$respuesta1 = $_REQUEST['respuesta1'];
$respuesta2 = $_REQUEST['respuesta2'];
$respuesta3 = $_REQUEST['respuesta3'];
$respuesta4 = $_REQUEST['respuesta4'];
$respuesta_correcta = $_REQUEST['respuesta_correcta'];
$masinfo = $_REQUEST['+info'];

//conexion
$conexion = mysqli_connect("localhost", "root", "root", "cresi") or die("problemas en la conexión");

//inserts
if ($selector == $proyecto) {
  mysqli_query($conexion, "INSERT INTO pProyecto (pregunta, respuesta1, respuesta2, respuesta3, respuesta4, respuesta_Correcta, mas_info) VALUES ('$pregunta', '$respuesta1', '$respuesta2', '$respuesta3', '$respuesta4','$respuesta_correcta', '$masinfo')") or die("problemas en el insert". mysqli_error($conexion));
  mysqli_close($conexion);
}else if ($selector == $prevencion) {
  mysqli_query($conexion, "INSERT INTO pPrevencion (pregunta, respuesta1, respuesta2, respuesta3, respuesta4, respuesta_Correcta, mas_info) VALUES ('$pregunta', '$respuesta1', '$respuesta2', '$respuesta3', '$respuesta4','$respuesta_correcta', '$masinfo')") or die("problemas en el insert". mysqli_error($conexion));
  mysqli_close($conexion);
}elseif ($selector == $salud) {
  mysqli_query($conexion, "INSERT INTO pSalud (pregunta, respuesta1, respuesta2, respuesta3, respuesta4, respuesta_Correcta, mas_info) VALUES ('$pregunta', '$respuesta1', '$respuesta2', '$respuesta3', '$respuesta4','$respuesta_correcta', '$masinfo')") or die("problemas en el insert". mysqli_error($conexion));
  mysqli_close($conexion);
}elseif ($selector == $derecho) {
  mysqli_query($conexion, "INSERT INTO pDerecho (pregunta, respuesta1, respuesta2, respuesta3, respuesta4, respuesta_Correcta, mas_info) VALUES ('$pregunta', '$respuesta1', '$respuesta2', '$respuesta3', '$respuesta4','$respuesta_correcta', '$masinfo')") or die("problemas en el insert". mysqli_error($conexion));
  mysqli_close($conexion);
}elseif ($selector == $diversidad) {
  mysqli_query($conexion, "INSERT INTO pDiversidad (pregunta, respuesta1, respuesta2, respuesta3, respuesta4, respuesta_Correcta, mas_info) VALUES ('$pregunta', '$respuesta1', '$respuesta2', '$respuesta3', '$respuesta4','$respuesta_correcta', '$masinfo')") or die("problemas en el insert". mysqli_error($conexion));
  mysqli_close($conexion);
};

  header("location:form_correct.html");


 ?>
