<?php

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];
$periodida=$_POST['themeple_priority'];
$asunto='Contacto Sitio Web '.strtoupper($periodida);
$destinatario = "aceroshe@gmail.com"; 
//$destinatario = "eduardopadillacz@gmail.com"; 
$html= ' Email : '.$email.'
<br>Nombre : '.$nombre.'
<br>Teléfono: '.$telefono.'
<br>Mensaje: '.$mensaje.'
<br>Prioridad : '.$periodida.'
'; 

$cabeceras = 'From: contacto@acerosermita.com' . "\r\n" .
                'Reply-To: cotizacion@acerosermita.com' . "\r\n" .
                'Content-Type: text/html' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
if (mail($destinatario, utf8_decode($asunto), $html, $cabeceras)) {
	header("Location: msn.html");
}else{
	echo "Mensaje no enviado";
}




?>