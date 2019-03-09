<?php

    $nombre    = $_POST['nombre'];
    $email   = $_POST['email'];
    $telefono   = $_POST['telefono'];
    $mensaje= $_POST['mensaje'];

    $to      = "ggvalenzuela@blackpeppa.pe";
    $subject = "Black Peppa - ".$nombre;
    $message = "Nombre del cliente: ".$nombre.". Correo: ".$email.". Teléfono: ".$telefono.".  Mensaje: ".$mensaje;
    $headers = "From: $email";

    if( mail($to,$subject,$message,$headers) )
    {
        echo "Gracias! Estaremos en contacto con usted pronto.";
    }
    else
    {
        echo '<script language="javascript">alert("Ha ocurrido un error. Por favor, recargue la página.")</script>';

   }
?>

