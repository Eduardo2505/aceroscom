<?php

   $destino= "npastrana.666@gmail.com";
   $nombre = $_POST["nombre"];
   $telefono = $_POST["telefono"];
   $correo = $_POST["mail"];
   $mensaje = $_POST["mensaje"];
   $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;
   mail($destino;"contacto", $contenido);


?>