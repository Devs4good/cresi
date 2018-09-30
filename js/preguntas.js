function Respuesta(opcion, correcto) {
	if (opcion==correcto)
	{
  	window.location.assign("correcto.php");
  	}
else
	{
	window.location.assign("incorrecto.php");
	}
}
