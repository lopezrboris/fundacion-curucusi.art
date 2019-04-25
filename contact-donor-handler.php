<?php
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

	$de = 'lopezrboris@gmail.com';
	$asunto = 'NUEVO DONADOR DESDE CURUCUSI.ORG';
	$cuerpo = "Nombre donador: $nombre.\n".
		"Correo donador: $correo.\n".
		"Mensaje: $mensaje.\n";

	$para = "lopezrboris@gmail.com";
	$cabeceras = "From: $de \r\n";
	$cabeceras .= "Reply-To: $correo \r\n";
	mail($para,$asunto,$cuerpo,$cabeceras);
	//header("Location: index.html");
?>
