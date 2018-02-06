<?php

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$asunto='Cotizacion Sitio Web de '.strtoupper(limpiar_caracteres_especiales($nombre));
$producto=$_POST['producto'];
$mensaje=$_POST['mensaje'];
$medida=$_POST['medida'];
$unidad=$_POST['unidad'];
$cantidad=$_POST['cantidad'];
$destinatario = "aceroshe@gmail.com"; 
//$destinatario = "eduardopadillacz@gmail.com"; 
$html= ' Email : '.$email.'
<br>Nombre : '.$nombre.'
<br>Teléfono: '.$telefono.'
<br>Mensaje: '.$mensaje.'
<br>Producto : '.$producto.'
<br>Medida : '.$medida.'
<br>Unidad : '.$unidad.'
<br>Cantidad : '.$cantidad.' 
'; 

$cabeceras = 'From: cotizacion@acerosermita.com' . "\r\n" .
                'Reply-To: contacto@acerosermita.com' . "\r\n" .
                'Content-Type: text/html' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();



if (mail($destinatario, utf8_decode($asunto), $html, $cabeceras)) {
	header("Location: msn.html");
}else{
	echo "Mensaje no enviado";
}
function limpiar_caracteres_especiales($s) {
	$s = ereg_replace("[áàâãª]","a",$s);
	$s = ereg_replace("[ÁÀÂÃ]","A",$s);
	$s = ereg_replace("[éèê]","e",$s);
	$s = ereg_replace("[ÉÈÊ]","E",$s);
	$s = ereg_replace("[íìî]","i",$s);
	$s = ereg_replace("[ÍÌÎ]","I",$s);
	$s = ereg_replace("[óòôõº]","o",$s);
	$s = ereg_replace("[ÓÒÔÕ]","O",$s);
	$s = ereg_replace("[úùû]","u",$s);
	$s = ereg_replace("[ÚÙÛ]","U",$s);
	$s = str_replace(" ","-",$s);
	$s = str_replace("ñ","n",$s);
	$s = str_replace("Ñ","N",$s);
	//para ampliar los caracteres a reemplazar agregar lineas de este tipo:
	//$s = str_replace("caracter-que-queremos-cambiar","caracter-por-el-cual-lo-vamos-a-cambiar",$s);
	return $s;
}


?>