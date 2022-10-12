<?php 
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $website = $_POST['website'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Mensaje:".$_POST['mensaje'];


	if(mail('juanchi_bulldog@hotmail.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>