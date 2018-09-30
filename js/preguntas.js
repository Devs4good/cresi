function Respuesta(opcion, correcto, id) {
	if (opcion==correcto)
	{
  	window.location.assign("correcto.php?id=" + id);
  	}
else
	{
	window.location.assign("incorrecto.php");
	}
}
