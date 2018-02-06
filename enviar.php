<? php
$destino = "carel4imd@gmail.com";
$nombre = $_POST ["nombre"];
$telefono = $_POST ["telefono"];
$correo = $_POST ["correo"];
$producto = $_POST ["producto"];
$mensaje = $_POST ["mensaje"];
$contenido = "\Nombre: " . $nombre "\nTelefono:" . $telefono "\nCorreo" . $correo "\nProducto" . $producto "\nMensaje" . $mensaje;
mail($destino,"Cotizar",$contenido);
header("Location:gracias.html");
?>	