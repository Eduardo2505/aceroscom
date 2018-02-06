<?php

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$asunto='Cotiza';
$producto=$_POST['producto'];
$mensaje=$_POST['mensaje'];
$medida=$_POST['medida'];
$unidad=$_POST['unidad'];
$cantidad=$_POST['cantidad'];
//$destinatario = "adrian.bernabe.jesus@gmail.com";
//$destinatario = "eduardopadillacz@gmail.com";
//carel4imd@gmail.com
$destinatario = "carel4imd@gmail.com";

$cuerpo = '
<html lang="en-Es" >
 <meta charset="UTF-8" />
<head>
</head>
<body> Email : '.$email.'
<br>Nombre '.$nombre.'
<br>Teléfono: '.$telefono.'
<br>Mensaje: '.$mensaje.'
<br>Producto '.$producto.'
<br>Medida '.$medida.'
<br>Unidad '.$unidad.'
<br>Cantidad '.$cantidad.'
</body>
</html>
';

//para el envío en formato HTML
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//dirección del remitente
$headers .= "From: Aceros Ermita Cotiza<contacto@acerosermita.com>\r\n";

//dirección de respuesta, si queremos que sea distinta que la del remitente
//$headers .= "Reply-To: mariano@desarrolloweb.com\r\n";

//ruta del mensaje desde origen a destino
$headers .= "Return-path: contacto@acerosermita.com\r\n";

//direcciones que recibián copia
//$headers .= "Cc: maria@desarrolloweb.com\r\n";

//direcciones que recibirán copia oculta
//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n";


$bool =mail($destinatario,$asunto." (".$telefono.")",$cuerpo,$headers);
if($bool){


	header("Location: msn.html");
}else{
	echo "Mensaje no enviado";
}




?>
