<?php

try {
	$message = "Se ha llenado la forma de contacto con la siguiente información:\n\n";

    //Validaciones
	if( (preg_match("/\b(?:(?:https?|ftp|http):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $_POST["mensaje"])) ){
		echo json_encode(['status' => false, 'message' => "Favor de no ingresar links o enlaces externos en la forma de contacto."]);
		exit;
	}

    // Validación grecaptcha a través de API
    $token = $_POST['token'];
    $handle = curl_init();
    
    curl_setopt_array($handle, [
        CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query(
            [ 
                'secret' => '6LfqplYcAAAAAHUVdIUvzMNtMx_H2o9AS2QP8HeB',
                'response' => $token
            ]
        ),
        CURLOPT_RETURNTRANSFER => true,
    ]);
    
   $data = curl_exec($handle);
   curl_close($handle);
   $data = json_decode($data, true);

   // Evaluación obtenida de Recaptcha (Si el score es mayor o igual a 0.6 no es SPAM/BOT)
   if ($data['success'] == 1 && $data['score'] >= 0.6) { 

		foreach ($_POST as $key => $value) {
			if ($key != 'token') {
				$message = $message.ucwords($key).": ".$value."\n";
			}
		}

		$handle = curl_init();
		$postData = [
			'nombre' => $_POST['nombre'],
			'correo' => $_POST['correo'],
			'telefono' => $_POST['telefono'],
			'mensaje' => $_POST['mensaje'],
			'utm_id' => $_POST['utm_id'],
			'utm_source' => $_POST['utm_source'],
			'utm_medium' => $_POST['utm_medium'],
			'utm_campaign' => $_POST['utm_campaign'],
			'utm_content' => $_POST['utm_content'],
			'utm_term' => $_POST['utm_term'],
			'token' => 'RnV0dXJpdGUyMDIw',
			'client' => 72,
		];
		
		curl_setopt_array($handle, [
			CURLOPT_URL => "https://omnia.futurite.com/api/save-lead-form",
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => $postData,
			CURLOPT_RETURNTRANSFER => true,
		]);
	
		$data = curl_exec($handle);
		curl_close($handle);

		$to = 'contacto@drenriquebarraganoftalmologo.com, leads@futurite.net';
		$title = 'Se ha llenado la forma de contacto de de DR Barragán';
		$headers = 'From: Alertas Contacto <alertas@futurite.com>' . "\r\n".
				'Reply-To: '.$_POST["correo"]. "\r\n" .
				'X-Mailer: PHP/' . phpversion();

		if(empty($_POST)){
			echo json_encode(['status' => false, 'message' => "No se ha podido enviar los datos"]);
		} else {
			$emailResp = @mail($to, $title, $message, $headers);
			echo json_encode(['status' => true, 'message' => "La forma de contacto se ha enviado con exito."]);
		}
   } else {
      echo json_encode(['status' => false, 'message' => 'No se podido ha procesar tu solicitud por posible SPAM, intenta más tarde.']);
   }
} catch (\Exception $e) {
	echo json_encode(['status' => false, 'message' => $e->getMessage()]);
}
