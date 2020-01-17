<?php

$message = "Se ha llenado la forma de cotacto con la siguiente informacion:\n\n";

//Validaciones
if( (preg_match("/\b(?:(?:https?|ftp|http):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $_POST["mensaje"])) ){
	echo json_encode(array('estatus' => false, 'message' => "Favor de no ingresar links o enlaces externos en la forma de contacto."));
	exit;
}


foreach ($_POST as $key => $value) {
	$message = $message.ucwords($key).": ".$value."\n";
}

$to = 'magalydejesus24@gmail.com, contacto@drenriquebarraganoftalmologo.com, carolina@drenriquebarraganoftalmologo.com ';
//$to = ', adrian.garza@futurite.com';
$title = 'Se ha llenado la forma de contacto de DR Barragán';
$headers = 'From: Alertas Contacto <alertas@futurite.com>' . "\r\n".
			'Reply-To: '.$_POST["correo"]. "\r\n" .
			'X-Mailer: PHP/' . phpversion();

if (@mail($to, $title, $message, $headers)){
	echo json_encode(array('estatus' => true,  'message' => "La forma de contacto se ha enviado con exito."));
}else{
	echo json_encode(array('estatus' => false, 'message' => "No se ha podido enviar la forma de contacto, intentalo nuevamente."));
}