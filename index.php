<?php
namespace Cresi;
require dirname( __FILE__ ) . '/bootstrap.php';
validate_session();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="ionicons/css/ionicons.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>Home</title>
	<style>
		.arriba1{
			padding: 35px;
			font-size: 40px;
			width: 130px;
			border-radius: 10px;
	    background-color: #9966ff;
			position: relative;
			right: -4px;
			color: #fff

		}
		.arriba2{
			padding: 35px;
			font-size: 40px;
			width: 130px;
			border-radius: 10px;
			background-color: #66ccff;
			position: relative;
			left: 1px;
			color: #fff

		}
		.centro{
	  	width: 80px;
			font-size: 40px;
	  	background-color: #ff99cc;
			height: 80px;
			text-align: center;
			border-radius: 50px;
			border: 7px solid;
			border-color: #fff;
			z-index: 1000;
			position: relative;
			top:-160px;
			color: #fff
		}

		.abajo1{
			padding: 35px;
			font-size: 40px;
			margin-right:5px;
			border-radius: 10px;
			width: 130px;
			background-color: #ff6666;
			color: #fff
		}
		.abajo2{
			padding: 35px;
			font-size: 40px;
			margin-left: -10px;
			border-radius: 10px;
			width: 130px;
			background-color: #ff9933;
			text-align: center;
			color: #fff

		}
		#inicio{
	    background:linear-gradient(#66ccff, #9966ff, #ff99cc);
	    height: 100%;
	  }

		.botonera{
			text-align: center;
			padding-left: 0px;
			padding-right: 0px;
		}

		.logo{
			margin-top: 5%;
			margin-bottom: 110px;
		}
		a{
			color: #fff;
		}
	</style>
</head>
	<body>
		<div class="inicio" id="inicio">
			<center><img src="img/logo2.png"  class="logo" alt="" width="250" height="250"></center>
			<div class="botonera">
				<a href="contacto.php"><button class="arriba1"><span class="icono icon ion-android-mail"><a href="ruleta.html"></button></a>
				<a href="#"><button class="arriba2"><span class="icono icon ion-information"></button></a>
				<br>
				<a href="#"><button class="abajo1"><span class="icon ion-android-search"></button></a>
				<a href="#"><button class="abajo2"><span class="icon ion-android-contact"></button></a>
			</div>
			<a href="ruleta.html"><center><button type="button" name="button" class="centro"><span class="icono icon ion-play"></span></button></center></a>
		</div>
    <a href="logout.php">Salir</a>
	</body>
</html>
