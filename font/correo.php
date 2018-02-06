<?php

   $destino= "npastrana.666@gmail.com";
   $nombre = $_POST["name"];
   $telefono = $_POST["phone"];
   $correo = $_POST["email"];
   $mensaje = $_POST["message"];
   $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;
   mail($destino;"contacto", $contenido);


?>